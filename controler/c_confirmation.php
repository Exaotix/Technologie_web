<?php

	if ($_SESSION['noadult'] == TRUE)
	{
		require 'controler/c_cancel.php';
	}
	else
	{
		require 'views/v_confirmation.php';
	}