<?php


		if (isset($_POST['destination']) && $_POST['destination'] !== "nodest")
		{
				$_SESSION['destination'] = $_POST['destination'];
				$mybooking->SetDestination($_POST['destination']);
		}
		else
		{
				$error['destination'] = TRUE;
		}
		if ($_POST['places'] > 0 && $_POST['places'] <= 9)
		{
				$_SESSION['places'] = $_POST['places'];
    		$mybooking->SetPlaces($_POST['places']);
		}
		else
		{
    		$error['places'] = TRUE;
		}

		if (isset($_POST['insurance']))
		{
				$_SESSION['insurance'] = TRUE;
    		$mybooking->SetInsurance("Yes");
		}
		else
		{
				$_SESSION['insurance'] = FALSE;
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
