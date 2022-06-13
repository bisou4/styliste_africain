@extends('layouts.main')

@section('content')

<h1 class="text-center text-primary p-3">LISTE DES MODELES </h1>
<div class="container">
    <div class="d-flex justify-content-end mb-3 p-3">
        <a href="{{route('gestion_modele.create') }}" class="btn btn-outline-danger"> Ajouter un modele</a>
    </div>
    <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">MODELE</th>
                <th scope="col">PHOTO</th>
                <th scope="col">DETAIL</th>
                <th scope="col">MODIFIER</th>
                <th scope="col">SUPPRIMER</th>
            </tr>
        </thead>
        <tbody>
            @foreach($modeles as $modele)
            <tr>
                <th scope="row">{{$modele->id}}</th>
                <td>{{$modele->nom}}</td>
                <td>{{$modele->photo}}</td>
                <td>{{$modele->detail}}</td>
                <td>{{$modele->modifier}}</td>
                <td>{{$modele->supprimer}}</td>

                <td><img src="{{ asset('image').'/'.$modeles->photo }}" style="width: 25%" alt=""></td>
                <td> <a class="button" href="{{route('gestion_modele.show', [$modele->id]) }}"><img src="{{ asset('image/more_info_24px.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td> <a class="button" href="{{route('gestion_modele.edit', [$modele->id]) }}"><img src="{{ asset('image/compose_48px.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                <td><a class="button" href="{{url('supprimer_modele/'.$modele->id) }}"><img src="{{ asset('image/waste_24px.png') }}" style="width:30px;height:30px" alt=""></a></td>
                @endforeach
        </tbody>
    </table>
</div>
@endsection
