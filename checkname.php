<?php
require_once('connection.php');

$email=$_GET['email'];
$result=$mysqli->query("SELECT * FROM `members` where email='$email'") or die ("database fetch problem");
if($result->num_rows)
{
echo 'email address is already registered';
}

?>