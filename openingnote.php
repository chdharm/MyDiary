<?php
require_once('connection.php');
session_start();

if(!isset($_SESSION['username'])){
header('Location:index.php');
}	

$username=$_SESSION['username'];
$title=$_GET['title'];
$notepath=$_GET['notepath'];
$imagepath=$_GET['imagepath'];
$image=substr($imagepath,1);

$text="";
$handle = fopen("./userdata/".$username."/".$title . ".txt", 'r');
      	
		while(!feof($handle)) {
  echo fgets($handle) . "<br>";
}

echo '<a href="editnote.php?title='.$title. '&&imagepath='.$imagepath.'&&notepath='.$notepath.'" target="_blank">edit<br></a>'; // timestamp daalna hai 


fclose($handle);;
		
		//fclose($handle);
		//$filepath="./userdata/".$username."/".$title . ".txt";

?>