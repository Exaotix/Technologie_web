<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="public/bootstrap.min.css" />
        <link rel="stylesheet" href="public/style.css" />
        <title>Summary</title>
    </head>

    <body>
      <div style="margin: 2% 0 0 2%">
        <p><h1>SUMMARY</h1></p>
      </div>
    	<div style="width: 400px; margin: 2% 0 0 2%; height: auto; border: 1px black dotted; padding: 1%">
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
    	</div>

    <form method="post" action="index.php?page=confirmation" style="margin: .5% 0 0 2%;">
        <p>
            <?php require 'views/v_error.php'; ?>
        </p>

        <div>
            <input class="btn btn-primary" type="submit" value="Next" />
        </div>
    </form>

    <form style="margin: .5% 0 0 2%" action="index.php?page=cancel">
        <input class="btn btn-danger" type="submit" value="Cancel" />
    </form>

    </body>
</html>
