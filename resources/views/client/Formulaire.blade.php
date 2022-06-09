@extends('layouts.main')

    <h1 style="text-align: center;">Formulaire insertion</h1>


    <div class="container">
        <a href="{{route('liste')}}">
            <button class="btn btn-primary mb-3">Liste des etudiants</button>
        </a>

        <form method="post" action="{{route('insertion')}}">
            @csrf
        <div class="row">
            <div class="form-group mb-3">
				<label class="col-sm-3 control-label"  >NOM</label>
				<div class="col-sm-6">
				<input type="text" name="nom" class="form-control" placeholder="Nom">
				</div>
				</div>

                <div class="form-group mb-3" >
                    <label class="col-sm-3 control-label" >PRENOM</label>
                    <div class="col-sm-6">
                    <input type="text" name="prenom" class="form-control" placeholder="Prénom">
                    </div>
                    </div>

                    <div class="form-group mb-3" >
                        <label class="col-sm-3 control-label" >AGE</label>
                        <div class="col-sm-6">
                        <input type="number" name="age" class="form-control" placeholder="age">
                        </div>
                        </div>

                    <div class="form-group mb-3">
                         <label class="col-sm-3 control-label">GENRE</label>
                         <div class="col-sm-6">
                         <select class="form-select" type="text" aria-label="Default select example" name="genre"  placeholder="genre">
                         <option selected > Genre </option>
                         <option value="Masculin">Masculin</option>
                         <option value="Feminin">Feminin</option>
                         </select>
                         </div>
                         </div>

                         <div class="form-group mb-3">
                            <label class="col-sm-3 control-label" >ADRESSE</label>
                            <div class="col-sm-6">
                            <input type="text" name="adresse" class="form-control" placeholder="Adresse">
                            </div>
                            </div>

                         <div class="form-group mb-3">
                            <label class="col-sm-3 control-label" >TELEPHONE</label>
                            <div class="col-sm-6">
                            <input type="number" name="telephone" class="form-control" placeholder="Telephone">
                            </div>
                            </div>

                            <div class="form-group mb-3">
                                <label class="col-sm-3 control-label" >EMAIL</label>
                                <div class="col-sm-6">
                                <input type="text" name="mail" class="form-control" placeholder="Email">
                                </div>
                                </div>

        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit"   class="btn btn-success " value="Valider">
				<a href="{{route('liste')}}" class="btn btn-danger">Annuler</a>
				</div>


        </div>

      </form>
    </div>

    <footer class=" bg-dark mt-3" style="height: 10vh;"> <br>
        <h3 style="text-align: center; font-family: arial; color: white;">Copyright FBE</h3>
      </footer>
</body>

</html>
