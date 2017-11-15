<?php

session_start();

if (!empty($_GET['page']) && is_file('controler/c_'.$_GET['page'].'.php'))
{
	include 'controler/c_'.$_GET['page'].'.php';
}

else
{
	include 'controler/c_home.php';
}