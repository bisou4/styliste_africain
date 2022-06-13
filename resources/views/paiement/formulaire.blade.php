@extends('layouts.main')
@section('content')

<h2 class="text-center text-primary p-3">AJOUTER UN PAIEMENT</h2>
<h4 class="text-center p-2">Veuillez remplir ce formulaire SVP!</h4>
<div class="container">
    <div class="col-md-12 mb-3">
        <label for="exampleInputEmail1" class="form-label">Nom du client</label>
        <select  class="form-control" name="clients_id" id="">
            @foreach ($clients as $client)
            <option value="{{$client->id}}">{{$client->nom}} {{$client->prenom}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-12 mb-3">
        <label for="exampleInputEmail1" class="form-label">Nom du modele</label>
        <select  class="form-control" name="modeles_id" id="">
            @foreach ($modeles as $modele)
            <option value="{{$modele->id}}">{{$modele->nom}}</option>
            @endforeach
        </select>
    </div>
    <form method="POST" class="shadow p-3 mb-5 bg-body rounded" action="{{ route('gestion_paiement.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            <div class="col">
                <label for="exampleInputEmail1" class="form-label">TOTAL</label>
                <input type="number" class="form-control" name="total" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="col">
                <label for="exampleInputEmail1" class="form-label">AVANCE</label>
                <input type="number" class="form-control" name="avance" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="col">
                <label for="exampleInputEmail1" class="form-label">RESTE</label>
                <input type="number" class="form-control" name="reste" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="col">
                <label for="exampleInputEmail1" class="form-label">DATE DU PAIEMENT</label>
                <input type="date" class="form-control" name="date" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
        </div>
        <div class="container d-flex mt-3">
            <div>
                <button type="submit" class="btn btn-outline-primary w-100">Enregistrer</button>
            </div> &nbsp;&nbsp;&nbsp;
            <div>
                <button type="reset" class="btn btn-outline-danger w-100">Annuler</button>
            </div>
        </div>
    </form>
</div>
@endsection

