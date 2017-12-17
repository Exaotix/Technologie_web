<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Passengers</title>
    </head>

    <body>
    	<p><h1>PASSENGERS</h1></p>

        <p>Passenger <?php echo count($mybooking->GetPassengers()) + 1; ?>

<form method="post" action="index.php?page=summary">

	<fieldset>
		<p>
			<label for="lastname">Lastname</label> <input type="text" name="lastname" id="lastname" />
		</p>

		<p>
			<label for="firstname">Firstname</label> <input type="text" name="firstname" id="firstname" />
		</p>

		<p>
			<label for="age">Age</label> <input type="number" name="age" id="age" />
		</p>

        <p>
            <?php require 'views/v_error.php'; ?>
        </p>

	</fieldset>

		<p>
            <input type="submit" value="Next"/>
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