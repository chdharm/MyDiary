<!DOCTYPE html>
<html >
<?php
session_start();
$username=$_SESSION['username'];

?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
	
	
	
	
	

	 
</head>
<body >

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html">Online Diary</a>
  </div>
  <div class="navbar-collapse collapse navbar-inverse-collapse">
    <ul class="nav navbar-nav">
      <li class=""><a href="home.php">Home <span class="glyphicon glyphicon-home"></span></a></li>
      <li><a href="">Archives</a></li>
	  <li><a href=""><span  class=" glyphicon  glyphicon-phone "></span> Contact us</a></li>
	  <li class=""><a href="logout.php">Logout <span class="glyphicon glyphicon-off"></span></a></li> 
	  <li style ="right:0px; width: 150px; position: absolute;"><a href="">Welcome <?=$username?></a></li>
	  
	 
        
    </ul>
    
   
  </div>
</div>









<div class="container-fluid" style="padding-top:80px;height:627px;background-color:"";">
<div class="row">
<div class="col-md-2">
<form action = "savenote.php" method = "post" enctype="multipart/form-data"> 
Title: <input type="text" name = "title" id = "title"><br>
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


?>