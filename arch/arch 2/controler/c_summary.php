<?php
	
if ((count($mybooking->GetPassengers()) < ($mybooking->GetPlaces() - 1)) && $mybooking->GetPlaces() != 0)
{
	if ($_POST['age'] >= 0 && $_POST['age'] <= 125)
	{
		$mybooking->SetPassengers(new Passenger($_POST['lastname'], $_POST['firstname'], $_POST['age']));
		require 'views/v_passengers.php';
	}
	else
	{
		$error['age'] = TRUE;
		require 'views/v_passengers.php';
	}

		
}
else
{
	if ($_POST['age'] >= 0 && $_POST['age'] <= 125)
	{
		$mybooking->SetPassengers(new Passenger($_POST['lastname'], $_POST['firstname'], $_POST['age']));
		
		$_SESSION['noadult'] = TRUE;

		for ($i = 0; $i < $mybooking->GetPlaces(); $i++)
    	{
        	if ($mybooking->GetPassengers()[$i]->GetAge() >= 18)
        	{
        		$_SESSION['noadult'] = FALSE;
        	}
    	}

    	require 'views/v_summary.php';
	}
	else
	{
		$error['age'] = TRUE;
		require 'views/v_passengers.php';
	}
}