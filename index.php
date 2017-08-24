<!DOCTYPE html>
<html lang="en">
<head><link rel="icon" href="favicon.ico" type="image/ico" sizes="48x48">
<script>
function checkEmail()
{
var xmlhttp;
var k=document.getElementById("email").value;
var urls="checkname.php?email="+k;
 
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


function checkUsername()
{
var xmlhttp;
var k=document.getElementById("username").value;
var urls="checkusername.php?username="+k;
 
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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Diary</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="js/jquery.min.js"></script>
	
    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
	
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="fonts/font2.css" rel="stylesheet" type="text/css">
    <link href="fonts/font2.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="img/logo.png" height="160" width="160"></img>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About Us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Sign Up</a>
                    </li>
                    <li>
						<a class="page-scroll" data-toggle="modal" href="#signin">Sign In</a>
                    </li>
                </ul>

<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel"><font color=black><center>Log In</center></font></h4>
      </div>
      <div class="modal-body">
        <form action="login_exec.php" method="POST">
         
	<div class="form-group">
            <label for="email" class="control-label"><font color=black><center>Email</center></font></label>
            <input type="text" name="email" class="form-control" id="message-text" required>
          </div>
          <div class="form-group">
            <label for="password" class="control-label"><font color=black><center>Password</center></font></label>
            <input type="password" name="password"class="form-control" id="message-text" required>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">LogIn</button>
      </div></form>
    </div>
  </div>
</div>
</div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">My Diary</h1> 
                        <p class="intro-text"><br></p>
                        <a href="#about" class="btn btn-circle page-scroll">
					
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="sect1 text-center">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>About Us</h2>
                <p>we are awesome
				
				</p>
                <p>we are awesome
				</p>
				
                <p>we are awesome</p>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="sect text-center">
        <div class="download-section">
            <div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h2>Registration Form</h2>                      
							<form method="post" action="signup_exec.php">
<font color="text">
<label for="full_name">Name: </label> <input type="text" name="name" placeholder="Name" required/>
<br><br>
<label for="username">Username: </label> <input type="text" id="username" onblur="checkEmail()" name="username" placeholder="Username" required/>
<br><br>
<label for="age">Age: </label> <input type="text" name="age" placeholder="Age" min="1" max="150"required/>
<br><br>
<label for="gender">Gender: </label> <input type="text" name="gender" placeholder="Gender" required/>
<br><br>
<label for="email">Email</label> <input type="text" id="email" name="email" onblur="checkUsername()" placeholder="email" required/>
<br><br>
<label for="password">Password: </label> <input type="password" id="password" placeholder="Password" name="password" minlength=8 required/>
<br><br>
<button type="submit" value="submit" onclick="checkfields()" class="btn btn-primary" data-toggle="modal" href="#sign_in">Sign Up</button>
</font>
</form>

					</div>
                </div>
            </div>
        </div>
    </section>




    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>&copy; Online Diary 2015</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
