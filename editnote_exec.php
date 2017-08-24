<?php  if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
 session_start();
 
if(!isset($_SESSION['username'])){
header('Location:index.php');
}	
 $username=$_SESSION['username'];
        
		$te = $_POST["notes"];
$title=$_POST['title'];
	    //mysqli_query($con,"INSERT INTO code VALUES($id,$text)");
		
		$handle = fopen("./userdata/".$username."/".$title . ".txt", 'w');
      	fwrite($handle,$te);
		fclose($handle);
		//$filepath="./userdata/".$username."/".$title . ".txt";
		}
		header('Location:home.php');

?>