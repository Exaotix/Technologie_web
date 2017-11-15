<?php
	
	include 'views/v_passengers.php';


$_SESSION['destination'] = $_POST['destination'];

if ($_POST['places'] > 0 && $_POST['places'] <= 9)
{
    $_SESSION['places'] = $_POST['places'];
}
else
{
    $_SESSION['places'] = "min 1 place, max 9 places";
    //Rajouter ici lien vers msg erreur
}
                    
if (isset($_POST['assurance']))
{
    $_SESSION['assurance'] = "Oui";
}
else
{
    $_SESSION['assurance'] = "Non";
}
	
?>

