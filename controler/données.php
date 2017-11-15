<?php


//Données page1
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


//Données page2
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