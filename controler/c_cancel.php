<?php

	unset($mybooking);
	session_start();
	$_SESSION = array();
	session_destroy();

	require 'controler/c_home.php';
