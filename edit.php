<?php
// If ID is POST, we do the EDIT in DB
$toEdit = isset($_POST['id']) ? $_POST['id'] : FALSE;

require 'model/DB.php';

$db = new DB('localhost', 'root', 'root', 'eric');

if (!$toEdit == FALSE)
{
  require 'model/passenger.php';
  require 'model/booking.php';

  $id = $toEdit;
  $destination = $_POST['destination'];
  $places = $_POST['places'];
  $insurance = $_POST['insurance']=="on" ? "Yes" : "No";
  $passengers = [];
  for ($i = 0; $i < count($places); $i++)
  {
    $passengers[] = new Passenger($_POST['lastname'][$i], $_POST['firstname'][$i], $_POST['age'][$i]);
  }
  $mybooking = new Booking($destination, $places, $insurance, 0, $passengers);
  $total = $mybooking->GetPrice();
  $persons = [];
  for ($i = 0; $i < $mybooking->GetPlaces(); $i++)
  {
    $persons[] = $mybooking->GetPassengers()[$i]->GetLastname() . ' ' . $mybooking->GetPassengers()[$i]->GetFirstname() . ' - ' . $mybooking->GetPassengers()[$i]->GetAge();
  }

  $persons = serialize($persons);

  $sql = "UPDATE booking SET destination='$destination', insurance='$insurance', total='$total', persons='$persons' WHERE id='$id'";
  var_dump($sql);
  $db->insertQuery($sql);

  header('Location: admin.php');
}

// If ID is GET, form to edit values, posted in same page
$id = isset($_GET['id']) ? $_GET['id'] : FALSE;

if ($id == FALSE)
{
  //header('Location: admin.php');
}


$sql = "SELECT * FROM booking WHERE id='$id'";
$result = json_decode($db->selectQuery($sql));

?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="public/bootstrap.min.css">
  </head>
  <body>
    <form method="post" action="edit.php" style="width: 600px; height: auto; margin: 2% 0 0 2%"> <!-- Form -->
      <!-- Hidden Input for ID of reservation /-->
      <input name="id" type="hidden" value="<?php echo $id; ?>" />
        <div class="form-group"> <!-- Bootstrap used to prettify the form !  -->
        		<label for="destination">Destination</label>
        		<select class="form-control" name="destination" id="destination">
              <!-- First option is disabled selected for default text to appear and not being selectable, value"nodest" for $error ERRORS /-->
              <option selected value="<?php echo $result[0]->destination;?>"><?php echo $result[0]->destination;?></option>
        			<option value="Lisbonne">Lisbonne</option>
        			<option value="Paris">Paris</option>
        			<option value="Madrid">Madrid</option>
        			<option value="Brussels">Brussels</option>
        			<option value="Berlin">Berlin</option>
        		</select>
        </div>

        <div class="form-group"> <!-- Number of places -->
        		<label for="places">Number of places</label>
            <input  class="form-control" type="number" name="places" id="places" min="1" max="9" value="<?php echo count(unserialize($result[0]->persons)) ?>" />
        </div>

        <div class="form-check"> <!-- Checkbox for Insurance -->
        	  <label class="form-check-label" for="insurance">Annulation insurance</label>
            <input class="form-check-input" type="checkbox" name="insurance" id="insurance" />
        </div>
        <p><h3>Passenger(s)</h3></p>
        <?php
          $passengers = unserialize($result[0]->persons);
          for ($i = 0; $i < count($passengers); $i++)
          {
            // Both names are before the "-"
            $names = explode('-', $passengers[$i])[0];
            // First elem is Firstname
            $firstname = explode(' ', $names)[0];
            // Second is Lastname
            $lastname = explode(' ', $names)[1];
            // Age is the second part of passengers
            $age = ltrim(explode('-', $passengers[$i])[1]);
            echo '<div class="form-group">
        			<label for="lastname">Lastname</label>
              <input class="form-control" type="text" name="lastname[]" id="lastname" value="'.$lastname.'" />
        		</div>

        		<div class="form-group">
        			<label for="firstname">Firstname</label>
              <input class="form-control" type="text" name="firstname[]" id="firstname" value="'.$firstname.'" />
        		</div>

        		<div class="form-group">
        			<label for="age">Age</label>
              <input class="form-control" type="number" name="age[]" id="age" min="1" max="125" value="'.$age.'" />
        		</div>';
          }
        ?>

        <input type="submit" class="btn btn-success" value="Edit" />
        <a href="admin.php"><button class="btn btn-default">Back to admin</button></a>
    </form>

    <?php
      $insurance = $result[0]->insurance == "Yes" ? TRUE : FALSE;
    ?>
    <script>
      var isInsurance = <?php echo $insurance ?>;
      if (isInsurance == true)
      {
        document.getElementById('insurance').checked = true;
      }
    </script>
  </body>
</html>
