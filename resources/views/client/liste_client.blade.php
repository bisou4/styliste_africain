@extends('layouts.main')

@section('content')
    <h1 class="text-center text-primary p-3">LISTE DES CLIENTS </h1>
    <div class="container">
        <div class="d-flex justify-content-end mb-3 p-3">
            <a href="{{ route('gestion_client.create') }}" class="btn btn-outline-danger"> Ajouter un client</a>
        </div>
        <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOM</th>
                    <th scope="col">PRENOM</th>
                    <th scope="col">TELEPHONE</th>
                    <th scope="col">ADRESSE</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">DETAIL</th>
                    <th scope="col">MODIFIER</th>
                    <th scope="col">SUPPRIMER</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <th scope="row">{{ $client->id }}</th>
                        <td>{{ $client->nom }}</td>
                        <td>{{ $client->prenom }}</td>
                        <td>{{ $client->telephone }}</td>
                        <td>{{ $client->adresse }}</td>
                        <td>{{ $client->email }}</td>
                        
                        <td> <a class="button" href="{{ route('gestion_client.show', [$client->id]) }}"><img
                                    src="{{ asset('image/more_info_24px.png') }}" style="width:30px;height:30px"
                                    alt=""></a> </td>
                        <td> <a class="button" href="{{ route('gestion_client.edit', [$client->id]) }}"><img
                                    src="{{ asset('image/compose_48px.png') }}" style="width:30px;height:30px" alt=""></a>
                        </td>
                        <td><a class="button" href="{{ url('supprimer_client/' . $client->id) }}"><img
                                    src="{{ asset('image/waste_24px.png') }}" style="width:30px;height:30px"
                                    alt=""></a></td>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
