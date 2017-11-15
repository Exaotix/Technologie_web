<?php
	
	include 'views/v_summary.php';


	$_SESSION['nom'] = $_POST['nom'];
                    
$_SESSION['prenom'] = $_POST['prenom'];
                    
if ($_POST['age'] > 0 && $_POST['age'] <= 99)
{
    $_SESSION['age'] = $_POST['age'];
}
else
{
    $_SESSION['age'] = "min 1 an, max 99 ans";
}
	
?>