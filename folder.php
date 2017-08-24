<?php
session_start();
$username=$_SESSION['username'];
mkdir('./'.$username, 0700) or die (' fff') ;
?>