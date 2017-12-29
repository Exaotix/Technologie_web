<?php
	
	$mybooking->Cancel();

	session_destroy();

	require 'controler/c_home.php';