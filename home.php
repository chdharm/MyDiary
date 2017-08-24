<!DOCTYPE html>
<html >
<?php
require('connection.php');

session_start();
$username=$_SESSION['username'];

if(!isset($_SESSION['username'])){
header('Location:index.php');
}	
?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
	
	
	<script>
	
function checktitle()
{
var xmlhttp;
var k=document.getElementById("title").value;
var urls="checktitle.php?title="+k;
 
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4)
    {
        //document.getElementById("err").style.color="red";
       // document.getElementById("chec").innerHTML=xmlhttp.responseText;
	   var ale=xmlhttp.responseText.toString();
	   if(!ale=='')
 alert(xmlhttp.responseText);
    }
  }
xmlhttp.open("GET",urls,true);
xmlhttp.send();
}

	</script>
	
	

	 
</head>
<body >

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Online Diary</a>
  </div>
  <div class="navbar-collapse collapse navbar-inverse-collapse">
    <ul class="nav navbar-nav">
      <li class=""><a href="home.php">Home <span class="glyphicon glyphicon-home"></span></a></li>
      <li><a href="archive.php">Archives</a></li>
	  <li><a href=""><span  class=" glyphicon  glyphicon-phone "></span> Contact us</a></li>
	  <li class=""><a href="logout.php">Logout <span class="glyphicon glyphicon-off"></span></a></li> 
	  <li style ="right:0px; width: 150px; position: absolute;"><a href="">Welcome <?=$username?></a></li>
	  
	 
        
    </ul>
    
   
  </div>
</div>









<div class="container-fluid" style="padding-top:80px;height:627px;background-color:"";">
<div class="row">
<div class="col-md-2">
<form action = "home.php" method = "post" enctype="multipart/form-data"> 
Title: <input type="text" name = "title" onblur="checktitle()id = "title"><br>
Note:
<textarea  name="notes" rows="18" cols="150" >
</textarea>
<input type="submit" value="Submit">
<input type="reset" value="Reset">
<p>
If you want to upload an image:<br>
<input type="file" name="datafile" size="40">
</p>
</form>
</div>
</div>
<br>
<br>

</div>



<div class="container-fluid" >

<div class="row" style="background-color:#001A66;height:40px;padding-top:10px;">
<div class="col-md-4"></div>
<div class="col-md-4">Copyright &copy; Online Diary 2015.
</div>
<div class="col-md-4"></div>
</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
        
		$text = $_POST["notes"];
		$title = $_POST["title"];
	    //mysqli_query($con,"INSERT INTO code VALUES($id,$text)");
		
		$handle = fopen("./userdata/".$username."/".$title . ".txt", 'w');
      	fwrite($handle,$text);
		fclose($handle);
		$filepath="./userdata/".$username."/".$title . ".txt";

//upload file
$target_dir = "./userdata/".$username."/";
$target_file = $target_dir . basename($_FILES["datafile"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["datafile"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["datafile"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["datafile"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$stmt1=$mysqli->prepare("INSERT INTO notes(username,title,notepath,imagepath,timestamp) VALUES (?,?,?,?,?)");
$stmt1->bind_param('sssss',$username,$title,$filepath ,$target_file,date("Y-m-d H:i:s"));

if($stmt1->execute())
echo "<script>alert('note saved successfully');</script>";



//upload file file
		
		//header('Location: home.php');
 }

?>