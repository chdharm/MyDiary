<?php
require_once('connection.php');

$username=$_GET['username'];
$result=$mysqli->query("SELECT * FROM `members` where username='$username'") or die ("database fetch problem");
if($result->num_rows)
{
echo 'username is already registered';
}

?>