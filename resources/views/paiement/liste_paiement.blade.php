@extends('layouts.main')

@section('content')
    <h1 class="text-center text-primary p-3">LISTE DES PAYEMENTS </h1>
    <div class="container">
        <div class="d-flex justify-content-end mb-3 p-3">
            <a href="{{ route('gestion_paiement.create') }}" class="btn btn-outline-danger"> Ajouter un paiement</a>
        </div>
        <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOM DU CLIENT</th>
                    <th scope="col">TOTAL</th>
                    <th scope="col">AVANCE</th>
                    <th scope="col">RESTE</th>
                    <th scope="col">DATE DE PAIEMENT</th>
                    <th scope="col">MODIFIER</th>
                    <th scope="col">SUPPRIMER</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($paiements as $paiement)
                    <tr>
                        <th scope="row">{{ $paiement->id }}</th>
                        <td>{{$mesure->Paiement->nom}}</td>
                        <td>{{$mesure->Paiement->total}}</td>
                        <td>{{$mesure->Paiement->avance}}</td>
                        <td>{{$mesure->Paiement->reste}}</td>
                        <td>{{$mesure->Paiement->date}}</td>
                        
                        <td> <a class="button" href="{{ route('gestion_paiement.show', [$paiement->id]) }}"><img
                                    src="{{ asset('image/more_info_24px.png') }}" style="width:30px;height:30px"
                                    alt=""></a> </td>
                        <td> <a class="button" href="{{ route('gestion_paiement.edit', [$paiement->id]) }}"><img
                                    src="{{ asset('image/compose_48px.png') }}" style="width:30px;height:30px" alt=""></a>
                        </td>
                        <td><a class="button" href="{{ url('supprimer_paiement/' . $paiement->id) }}"><img
                                    src="{{ asset('image/waste_24px.png') }}" style="width:30px;height:30px"
                                    alt=""></a></td>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
