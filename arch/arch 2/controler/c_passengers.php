<?php

		$mybooking->SetDestination($_POST['destination']);

		if ($_POST['places'] > 0 && $_POST['places'] <= 9)
		{
    		$mybooking->SetPlaces($_POST['places']);
		}
		else
		{
    		$error['places'] = TRUE;
		}
                    
		if (isset($_POST['insurance']))
		{
    		$mybooking->SetInsurance("Yes");
		}
		else
		{
    		$mybooking->SetInsurance("No");
		}



		if (isset($error))
		{
			require 'views/v_home.php';
		}
		else
		{
			require 'views/v_passengers.php';
		}
		
	

	