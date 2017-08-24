
<?php
 require_once('connection.php');
if($mysqli->connect_errno){

printf("failed to connect to the database");
exit();
}

//inserting members
$pas=$_POST['password'];
$pass=md5($pas);
$username=$_POST['username'];
$stmt1=$mysqli->prepare("INSERT INTO MEMBERS(name,username,age,gender,email,password) VALUES (?,?,?,?,?,?)");
$stmt1->bind_param('ssdsss',$_POST['name'],$username,$_POST['age'],$_POST['gender'],$_POST['email'],$pass);

//inserting row in result

if($stmt1->execute()){
mkdir('./userdata/'.$username, 0700) or die (' folder already exists') ;
/*session_start();
$_SESSION['team_name']=$_POST['team_name'];
*/

echo '<script>
alert("Registration successful Now you can sign in");
</script>';
header('Location:index.php');
}

?>
