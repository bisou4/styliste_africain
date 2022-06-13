@extends('layouts.main')
@section('content')
    <h1 class="text-center"><strong style="color: black">Détail des mesure {{ $finds->id }}</strong></h1>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('storage') . '/' . $finds->photo }}" class="card-img-top" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"> Détail du client</h5>
                    <p>Nom : <strong style="color: red"> {{ $finds->nom }} </strong></p>
                    <p>Hauteur_poitrine : <strong style="color: red"> {{ $finds->hauteur_poitrine }}</strong></p>
                    <p>Hauteur_pointe_sein :<strong style="color: red"> {{ $finds->hauteur_pointe_sein }}</strong></p>
                    <p>Hauteur_taille_sol:<strong style="color: red"> {{ $finds->hauteur_taille_sol }}</strong></p>
                    <p>Longueur_epaule :<strong style="color: red"> {{ $finds->hauteur_pointe_sein }}</strong></p>
                    <p>Longueur_milieu_dos:<strong style="color: red"> {{ $finds->longueur_epaule}}</strong></p>
                    <p>Carrure_devant:<strong style="color: red"> {{ $finds->longueur_milieu_dos}}</strong></p>
                    <p>Carrure_devant:<strong style="color: red"> {{ $finds->larrure_devant }}</strong></p>
                    <p>Tour_poitrine:<strong style="color: red"> {{ $finds->tour_poitrine }}</strong></p>
                    <p>Tour_manche :<strong style="color: red"> {{ $finds->tour_manche }}</strong></p>
                    <p>Tour_cuisse :<strong style="color: red"> {{ $finds->tour_cuisse}}</strong></p>
                    <p>Tour_bras :<strong style="color: red"> {{ $finds->tour_bras}}</strong></p>
                    <p>Tour_genoux :<strong style="color: red"> {{ $finds->tour_genoux }}</strong></p>
                    <p>Tour_poignet :<strong style="color: red"> {{ $finds->tour_poignet }}</strong></p>
                    <p>Tour_mollet:<strong style="color: red"> {{ $finds->tour_mollet }}</strong></p>
                    <p>Tour_bassin :<strong style="color: red"> {{ $finds->tour_bassin }}</strong></p>
                    <p>Tour_tour_cheville:<strong style="color: red"> {{ $finds->Tour_cheville }}</strong></p>
                    <p>Modifier : <strong style="color: red"> {{ $finds->modifier }}</strong></p>
                    <p>Supprimer : <strong style="color: red"> {{ $finds->supprimer }}</strong></p>
                    <a href="{{ route('gestion_mesure.index') }}" class="btn btn-primary">OK</a>
                </div>
            </div>
        </div>
    </div>
@endsection
