<!DOCTYPE html>
<html lang="fr">


    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Page 2</title>
    </head>

    <body>
    	<p><h1>Passager 1</h1></p>

<form method="post" action="index.php?page=summary">

	<fieldset>
		<p>
			<label for="nom">Nom</label> <input type="text" name="nom" id="nom" />
		</p>

		<p>
			<label for="prenom">Prénom</label> <input type="text" name="prenom" id="prenom" />
		</p>

		<p>
			<label for="age">Age</label> <input type="number" name="age" id="age" />
		</p>

	</fieldset>

		<p>
    		<input type="submit" value="Etape suivante" /> 
    		
    		<input type='button' value='Retour à la page précédente' onClick="Page1.php" />

            <input type="reset" name="reset" value="Annuler la réservation" />
    	</p>

</form>

    </body>
</html>