<?php
	//Start session

 
	//Include database connection details
	require_once('connection.php');
 

	//Create query

	$result=$mysqli->query("SELECT email,password,username FROM MEMBERS WHERE email='{$_POST['email']}'") or die ("databse fetch problem");
while($row=mysqli_fetch_array($result)){
if($row['email']==$_POST['email']&&$row['password']==md5($_POST['password'])){
 //set the user session
$username=$row['username'];
	session_start();
	$_SESSION['username']=$username;
            //redirect to home
            header('Location: home.php');}
else {echo '<script>alert("Login failed");
window.location = "/diary/index.php";
</script>';




}
		}

?>