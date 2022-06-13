@extends('layouts.main')

@section('content')

<h1 class="text-center text-primary p-3">LISTE DE MESURES </h1>
<div class="container">
    <div class="d-flex justify-content-end mb-3 p-3">
        <a href="{{route('gestion_mesure.create') }}" class="btn btn-outline-danger"> Ajouter une mesure</a>
    </div>
    <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
        <thead>
            <tr>
                <th scope="col">Numero</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom </th>
                <th scope="col">Telephone</th>
                <th scope="col">Email</th>
                <th scope="col">Detail</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mesures as $mesure)
            <tr>
                <th scope="row">{{$mesure->id}}</th>
                <td>{{$mesure->Client->nom}}</td>
                <td>{{$mesure->Client->prenom}}</td>
                <td>{{$mesure->Client->telephone}}</td>
                <td>{{$mesure->Client->email}}</td>

                <td> <a class="button" href="{{route('gestion_mesure.show', [$mesure->id]) }}"><img src="{{ asset('image/more_info_24px.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td> <a class="button" href="{{route('gestion_mesure.edit', [$mesure->id]) }}"><img src="{{ asset('image/compose_48px.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td><a class="button" href="{{url('supprimer_mesure/'.$mesure->id) }}"><img src="{{ asset('image/waste_24px.png') }}" style="width:30px;height:30px" alt=""></a></td>
                @endforeach
        </tbody>
    </table>
</div>
@endsection
