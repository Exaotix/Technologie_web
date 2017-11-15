<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Summary page</title>
    </head>

    <body>
    	<p><h1>VALIDATION DES RESERVATIONS</h1></p>

    	<fieldset>
    		<p>
                <!-- affiche toutes les variables -->
                    <p>
                        Destination : <?php echo $_SESSION['destination']; ?>
                    </p>

                    <p>
                        Nombre de places : <?php echo $_SESSION['places']; ?>
                    </p>
                    
                    <p>
                        Nom : <?php echo $_SESSION['prenom'] . " " . $_SESSION['nom']; ?>
                    </p>

                    <p>
                        Age : <?php echo $_SESSION['age']; ?>
                    </p>

                    <p>
                        Assurance annulation : <?php echo $_SESSION['assurance']; ?>
                    </p>
    		</p>
    	</fieldset>

    </body>
</html>