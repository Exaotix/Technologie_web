<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="public/bootstrap.min.css" />
        <link rel="stylesheet" href="public/style.css" />
        <title>Passengers</title>
    </head>

    <body>
      <div style="margin: 2% 0 0 2%">
    	   <p><h1>PASSENGERS</h1></p>
         <h3>Passenger <?php echo count($mybooking->GetPassengers()) + 1; ?></h3>
      </div>
<form method="post" action="index.php?page=summary" style="width: 600px; height: auto; margin: 2% 0 0 2%;">

		<div class="form-group">
			<label for="lastname">Lastname</label>
      <input class="form-control" type="text" name="lastname" id="lastname" required />
		</div>

		<div class="form-group">
			<label for="firstname">Firstname</label>
      <input class="form-control" type="text" name="firstname" id="firstname" required />
		</div>

		<div class="form-group">
			<label for="age">Age</label>
      <input class="form-control" type="number" name="age" id="age" min="1" max="125" />
		</div>

    <p>
        <?php require 'views/v_error.php'; ?>
    </p>

    <input class="btn btn-primary" type="submit" value="Next"/>
</form>
<form action="index.php?page=home" style="margin-left: 2%; margin-top: .5%;">
    <input class="btn btn-default" type="submit" value="Previous" />
</form>

<form method="post" action="index.php?page=cancel" style="margin-left: 2%; margin-top: .5%;">
    <p>
        <input class="btn btn-danger" type="submit" value="Cancel" />
    </p>
</form>


    </body>
</html>
