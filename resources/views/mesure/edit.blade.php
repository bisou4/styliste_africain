@extends('layouts.main')
@section('content')
    <div class="container">
        <h2 class="text-center mt-3 text-primary shadow p-3 mb-5 bg-body rounded">Formulaire d'insertion</h2>
        <h5 class="text-center mb-3">Veuillez insérer vos données ci-dessous.</h5>
        <form method="POST" class="shadow p-3 mb-5 bg-body rounded"
            action="{{ route('gestion_mesure.update', [$finds->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="d-flex">
                <div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ID</label>
                        <input type="text" class="form-control" value="{{ $finds->id }}" name="id"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nom</label>
                        <input type="text" class="form-control" value="{{ $finds->nom }}" name="nom"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Prenom</label>
                        <input type="text" class="form-control" value="{{ $finds->prenom }}" name="prenom"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                </div>
                <div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Detail</label>
                        <input type="text" class="form-control" name="detail" value="{{ $finds->detail }}"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Modifier</label>
                        <input type="text" class="form-control" name="modifier" value="{{ $finds->modifier }}"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Supprimer</label>
                        <input type="text" class="form-control" name="supprimer" value="{{ $finds->supprimer }}"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="container d-flex">
                        <div>
                            <button type="submit" class="btn btn-success w-100">Modifier</button>
                        </div> &nbsp;&nbsp;&nbsp;
                    </div>
        </form>
    </div>
</div>
    </div>
@endsection
