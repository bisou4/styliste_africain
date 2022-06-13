@extends('layouts.main')
@section('content')
    <h2 class="text-center text-primary p-3">ENREGISTRER UNE MESURE</h2>
    <h4 class="text-center p-2">Veuillez remplir ce formulaire SVP!</h4>
    <div class="container">
        <form method="POST" class="shadow p-3 mb-5 bg-body rounded" action="{{ route('gestion_mesure.store') }}"
            enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="col-md-12 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom du client</label>
                    <select  class="form-control" name="clients_id" id="">
                        @foreach ($clients as $client)
                        <option value="{{$client->id}}">{{$client->nom}} {{$client->prenom}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Hauteur poitrine</label>
                        <input type="number" class="form-control" name="titre" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Hauteur pointe_sein</label>
                        <input type="number" class="form-control" name="nom" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Hauteur taille_sol</label>
                        <input type="number" class="form-control" name="titre" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Longueur_epaule</label>
                        <input type="number" class="form-control" name="titre" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Longueur_milieu_dos</label>
                        <input type="number" class="form-control" name="titre" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Carrure_devant</label>
                        <input type="number" class="form-control" name="titre" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Tour de poitrine</label>
                        <input type="number" class="form-control" name="nom" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Tour de manche</label>
                        <input type="number" class="form-control" name="prenom" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Tour de cuisse</label>
                        <input type="number" class="form-control" name="poste" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Tour de genoux</label>
                        <input type="number" class="form-control" name="titre" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Tour de bras</label>
                        <input type="number" class="form-control" name="titre" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Tour de poignet</label>
                        <input type="number" class="form-control" name="titre" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Tour de bassin</label>
                        <input type="number" class="form-control" name="titre" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Tour de molle</label>
                        <input type="number" class="form-control" name="titre" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Tour de tour_cheville</label>
                        <input type="number" class="form-control" name="titre" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                </div>
            </div>
            <div class="container d-flex mt-3">
                <div>
                    <button type="submit" class="btn btn-outline-info w-100">Enregistrer</button>
                </div> &nbsp;&nbsp;&nbsp;
                <div>
                    <button type="reset" class="btn btn-outline-primary w-100">Annuler</button>
                </div>
            </div>
        </form>
    </div>
@endsection
