<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="public/bootstrap.min.css" />
        <title>Home</title>
    </head>

    <body>
      <div style="margin: 2% 0 0 2%">
        	<p><h1>BOOKING</h1></p>
        	<p>The price is 10€ per place for children up to 12 year old. 15€ for others.</p>
        	<p>The annulation insurance is 20€ regardless of the number of passengers.</p>
      </div>

<form method="post" action="index.php?page=passengers" style="width: 600px; height: auto; margin: 2% 0 0 2%"> <!-- Form -->
    <div class="form-group"> <!-- Bootstrap used to prettify the form !  -->
    		<label for="destination">Destination</label>
    		<select class="form-control" name="destination" id="destination">
          <!-- First option is disabled selected for default text to appear and not being selectable, value"nodest" for $error ERRORS /-->
          <option disabled selected value="nodest">Choose a destination</option>
    			<option value="Lisbonne">Lisbonne</option>
    			<option value="Paris">Paris</option>
    			<option value="Madrid">Madrid</option>
    			<option value="Brussels">Brussels</option>
    			<option value="Berlin">Berlin</option>
    		</select>
    </div>

    <div class="form-group"> <!-- Number of places -->
    		<label for="places">Number of places</label>
        <input  class="form-control" type="number" name="places" id="places" min="1" max="9" />
    </div>
      <p>
          <?php require 'views/v_error.php'; ?>
      </p>

    <div class="form-check"> <!-- Checkbox for Insurance -->
    	  <label class="form-check-label" for="insurance">Annulation insurance</label>
        <input class="form-check-input" type="checkbox" name="insurance" id="insurance" />
    </div>

    <div class="form-group"> <!-- Confirm / Next button -->
        <input class="btn btn-primary" type="submit" value="Next" /><br />
        <input class="btn btn-danger" type="reset" value="Cancel" style="margin: .5% 0 0 0;" />
    </div>
</form>
<form action="admin.php" style="margin: .5% 0 0 2%;">
  <button class="btn btn-info" type="submit">Admin</button>
</form>
<?php
    $selected = isset($_SESSION['destination']) ? $_SESSION['destination'] : "";
    $places = isset($_SESSION['places']) ? $_SESSION['places'] : 0;
    $insur = isset($_SESSION['insurance']) ? $_SESSION['insurance'] : FALSE;
?>
    <script type="text/javascript">
        // If destination in session
        var selected = "<?php echo $selected; ?>";
        if (selected !== "")
        {
            document.getElementById('destination').value = selected;
        }
        // If places in session
        var places = "<?php echo $places; ?>";
        if (places > 0)
        {
            document.getElementById('places').value = places;
        }
        // If insurance in session
        var insurance = "<?php echo $insur; ?>";
        if (insurance)
        {
            document.getElementById('insurance').checked = "checked";
        }

        // If CANCEL was used -> Better remove the ?page=cancel
        // Else Try : going next, go back previous -> ERROR;
        // Or page=home
        // Or page=confirmation (because confirmation OR cancel because of no major person == home == index.php == no need that much details ;) )
        if (document.location.href.indexOf("cancel") != -1 || document.location.href.indexOf("home") != -1 || document.location.href.indexOf("confirmation") != -1)
        {
            document.location.href = document.location.href.split('?')[0];
        }
    </script>
    </body>
</html>
