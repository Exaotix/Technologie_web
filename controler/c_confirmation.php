<?php

	if ($_SESSION['noadult'] == TRUE)
	{
		require 'controler/c_cancel.php';
	}
	else
	{
			// Push in DB !
			require 'model/DB.php';
			// Create connection
			$db = new DB('localhost', 'root', 'root', 'eric');

			// Prepare the insert statment values
			$destination = $mybooking->GetDestination();
			$total = $mybooking->GetPrice();
			$insurance = $mybooking->GetInsurance();

			$persons = [];
			for ($i = 0; $i < $mybooking->GetPlaces(); $i++)
			{
				$persons[] = $mybooking->GetPassengers()[$i]->GetLastname() . ' ' . $mybooking->GetPassengers()[$i]->GetFirstname() . ' - ' . $mybooking->GetPassengers()[$i]->GetAge();
			}
			// Best way for array : Serialize in db and unserialize out db
			$persons = serialize($persons);

			// INSERT INTO Statment
			$sql = "INSERT INTO booking(destination, insurance, total, persons) VALUES ('$destination', '$insurance', '$total', '$persons')";
			$db->insertQuery($sql);

			// Better close the connection to DB !
			$db->disconnect();

		require 'views/v_confirmation.php';
	}
