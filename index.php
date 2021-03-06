<?php

//---> Router <---

session_start();
require 'model/booking.php';
require 'model/passenger.php';

//The booking is saved in a variable called $mybooking
if(isset($_SESSION['mybooking']))
{
	$mybooking = unserialize($_SESSION['mybooking']);
}
else
{
	$mybooking = new Booking();
}

//Make the directions to the right views
if (!empty($_GET['page']) && is_file('controler/c_'.$_GET['page'].'.php'))
{
	require 'controler/c_'.$_GET['page'].'.php';
}
else
{
	require 'controler/c_home.php';
}


$_SESSION['mybooking'] = serialize($mybooking);
