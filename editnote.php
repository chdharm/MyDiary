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

$text = "" ;
$handle = fopen("./userdata/".$username."/".$title . ".txt", 'r');
      	
		while(!feof($handle)) {
  $text=$text.fgets($handle);
   
  }
  fclose($handle);
  

		
?>

<form action = "editnote_exec.php" method = "post" enctype="multipart/form-data"> 
Title: <?=$title?><input type="hidden" name="title" value="<?=$title?>"></input><br>

Note:
<textarea  name="notes" rows="18" cols="150"  >
<?=$text?>
</textarea>
<input type="submit" value="Submit">
<input type="reset" value="Reset">
<p>
</p>
</form>






