<?php

$id = isset($_GET['id']) ? $_GET['id'] : FALSE;
if ($id == FALSE)
{
  header('Location: admin.php');
}
require 'model/DB.php';

$db = new DB('localhost', 'root', 'root', 'eric');

$sql = "DELETE FROM booking WHERE id='$id'";

$db->insertQuery($sql);


header('Location: admin.php');
