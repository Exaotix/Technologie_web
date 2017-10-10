<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Page 3</title>
    </head>

    <body>
    	<p><h1>VALIDATION DES RESERVATIONS</h1></p>

    	<fieldset>
    		<p>
                <?php //Enregistre les champs de la page2 dans des variables de session

                    //nom
                    $_SESSION['nom'] = $_POST['nom'];
                    
                    //prenom
                    $_SESSION['prenom'] = $_POST['prenom'];
                    
                    //age
                    if ($_POST['age'] > 0 && $_POST['age'] <= 99)
                    {
                        $_SESSION['age'] = $_POST['age'];
                    }
                    else
                    {
                        $_SESSION['age'] = "min 1 an, max 99 ans";
                    };
                ?>
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