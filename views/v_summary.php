<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Summary</title>
    </head>

    <body>
    	<p><h1>SUMMARY</h1></p>

    	<fieldset>
    		<p>
                <!-- affiche toutes les variables -->
                    <p>
                        Destination : <?php echo $mybooking->GetDestination(); ?>
                    </p>

                    <p>
                        Number of places : <?php echo $mybooking->GetPlaces(); ?>
                    </p>

                    <p>
                        Annulation insurance : <?php echo $mybooking->GetInsurance(); ?>
                    </p>
                    
                    <p>
                        <?php

                            for ($i = 0; $i < $mybooking->GetPlaces(); $i++)
                            {
                                echo 'Name: '.$mybooking->GetPassengers()[$i]->GetLastname().' ';
                                echo $mybooking->GetPassengers()[$i]->GetFirstname().'<br />';
                                echo 'Age: '.$mybooking->GetPassengers()[$i]->GetAge().'<br />'.'<br />';
                            }
                            
                        ?>
                    </p>

    		</p>
    	</fieldset>

    <form method="post" action="index.php?page=confirmation">
        <p>
            <?php require 'views/v_error.php'; ?>
        </p>

        <p>
            <input type="submit" value="Next" />
        </p>
    </form>

<input type="button" value="Previous" onclick="history.go(-1)"/>

    <form method="post" action="index.php?page=cancel">
        <p>
            <input type="submit" value="Cancel" />
        </p>
    </form>

    </body>
</html>