<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> LAN Player  Acceuil</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </head>
    <body>
        <!-- NavBar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
             <img src="img/merde.jpg" width="32px" height="32px">
            <a class="navbar-brand" href="#">   LAN Player</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Acceuil<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tournois</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            A propos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Reglement</a>
                            <a class="dropdown-item" href="#">Organisation</a>
                            <a class="dropdown-item" href="#">Contact</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

      	<h4>
      		<center>
      		vous pouvez nous contacter à l'aide de ce formulaire
      		</center>
      	</h4>
      <form>

<!--Prénom et Nom-->
			<center>
          		<div class="col-md-6 mb-3">
            		<label>Prénom</label>
            			<input type="text" class="form-control" placeholder="Benabard" value="" required>
            	<div class="invalid-feedback">
              	Entrez un Prénom valide.
            	</div>
          		</div>
      		</center>
          	<center>
          		<div class="col-md-6 mb-3">
            		<label>Nom</label>
            			<input type="text" class="form-control" placeholder="JeanLouis" value="" required>
            	<div class="invalid-feedback">
              	Entrez un Nom de famille valide.
            	</div>
          		</div>
  			</center>
<!--Adresse mail -->
			<center>
            	<div class="col-md-6 mb-3">
            		<label>Adresse Mail</label>
            			<input type="text" class="form-control" value="" required>
            	<div class="invalid-feedback">
              	Entrez une adresse mail  valide.
            	</div>
          		</div>
          	</center>	
<!--Sujet -->
			<center>
            	<div class="col-md-6 mb-3">
            		<label>Objet</label>
    					<select name="Objets" class="form-control">
				            <option value="">--Choisir une option--</option>
				            <option value="">Demande de Renseignements</option>
				            <option value="">Presse / Question générale</option>
				            <option value="">Rejoindre et adhérer à l'organisation </option>
				            <option value="">Sponsoring et Parteneriat</option>
				            <option value="spider">Equipe support web</option>
    					</select>
          		</div>
          	</center>	
<!--Envoyer un message -->
			<center>
            	<div class="col-md-9 mb-15">
            		<label>Corps message</label>
            			<textarea type="text" class="form-control"></textarea>
          		</div>
          	</center>
      		</br>
<!-- Validation -->
			<center>
        		<div class="col-6">
         			<button type="button" class="btn btn-danger">Envoyer</button>
        		</div>
        	</center>
    </form>
</body>
</html>
