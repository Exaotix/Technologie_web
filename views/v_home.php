<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Home page</title>
    </head>



    <body>
    	<p><h1>RESERVATION</h1></p>
    	<p>Le prix de la place est de 10 euros jusqu'à 12 ans et ensuite de 15 euros.</p>
    	<p>Le prix de l'assurance annulation est de 20 euros quel que soit le nombre de voyageurs.</p>

<form method="post" action="index.php?page=passengers"> <!-- Formulaire -->

    <fieldset> <!-- Cadre autour du formulaire -->
    	<p> <!-- Liste déroulante destinations -->
    		<label for="destination">Destination</label>
    		<select name="destination" id="destination">
    			<option value="Lisbonne">Lisbonne</option>
    			<option value="Paris">Paris</option>
    			<option value="Madrid">Madrid</option>
    			<option value="Bruxelles">Bruxelles</option>
    			<option value="Berlin">Berlin</option>
    		</select>
    	</p>
    	<p> <!-- Petites flèches nbre de places -->
    		<label for="places">Nombre de places</label> <input type="number" name="places" id="places" />
        </p>
    	<p> <!-- Case à cocher assurance -->
    		<label for="assurance">Assurance annulation</label> <input type="checkbox" name="assurance" id="assurance" />
    	</p>
    </fieldset>

    	<p> <!-- Bouton de confirmation -->
                <input type="submit" value="Next step" />
            <!-- Bouton d'annulation : ça efface les champs -->
                <input type="reset" value="reset" />
    	</p>

</form>

    </body>
</html>