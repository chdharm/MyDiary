<?php
require_once('connection.php');

$username=$_GET['username'];
$result=$mysqli->query("SELECT * FROM `notes` where username='$username'") or die ("database fetch problem");
if($result->num_rows)
{
echo 'title is already used';
}

?>