<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Home</title>
    </head>

    <body>
    	<p><h1>BOOKING</h1></p>
    	<p>The price is 10€ per place for children up to 12 year old. 15€ for others.</p>
    	<p>The annulation insurance is 20€ regardless of the number of passengers.</p>

<form method="post" action="index.php?page=passengers"> <!-- Formulaire -->

    <fieldset> <!-- Cadre autour du formulaire -->
    	<p> <!-- Liste déroulante destinations -->
    		<label for="destination">Destination</label>
    		<select name="destination" id="destination">
    			<option value="Lisbonne">Lisbonne</option>
    			<option value="Paris">Paris</option>
    			<option value="Madrid">Madrid</option>
    			<option value="Brussels">Brussels</option>
    			<option value="Berlin">Berlin</option>
    		</select>
    	</p>
    	<p> <!-- Petites flèches nbre de places -->
    		<label for="places">Number of places</label> <input type="number" name="places" id="places" />
        </p>
        <p>
            <?php require 'views/v_error.php'; ?>
        </p>
    	<p> <!-- Case à cocher assurance -->
    		<label for="insurance">Annulation insurance</label> <input type="checkbox" name="insurance" id="insurance" />
    	</p>
    </fieldset>

        <p> <!-- Bouton de confirmation -->
            <input type="submit" value="Next" />
    	</p>
</form>

<form method="post" action="index.php?page=cancel">
    <p>
        <input type="submit" value="Cancel" />
    </p>
</form>

    </body>
</html>