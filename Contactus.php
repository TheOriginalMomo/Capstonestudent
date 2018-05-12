<!DOCTYPE html>

<?php
require_once('action_page.php');
if (isset($_POST) & !empty($_POST))


{
//User_ID
//First_Name
//Last_Name
//Email_Address
//Username
//Password
//Comments
//Event_Type
$First_Name =$_POST['First_Name'];
$Last_Name = $_POST['Last_Name'];
$Email_Address=mysqli_real_escape_string($conn,$_POST['Email_Address']);
$User_Comments=$_POST['User_Comments'];
$sql = "INSERT INTO `thecomments` (First_Name, Last_Name, Email_Address, User_Comments) VALUES ('$First_Name','$Last_Name', '$Email_Address', '$User_Comments')";

  $result = mysqli_query($conn, $sql);
        if($result){
            echo "User Comment Entered Successfully.";
        }else{
            echo "User Registration Failed";
        }
    }

?>



<html>
<head>
	<title>Contact Us</title>
	<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js'></script><meta name='viewport' content='width=device-width, initial-scale=1'>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">




<link rel="Stylesheet" type="text/css" href="color_scheme4.css">
</head>
<body>
<body>
    

 <<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                  <span class="glyphicon glyphicon-queen"></span> 
                  Logo
                </a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="Homepage2.php">Home</a>
                    </li>
                    <li>
                        <a href="Contactus.php">Contact Us</a>
                    </li>
                    <li class="active">
                        <a href="EventSchedulepage.php">Schedule a Event</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>


                        <a href="Login.php">Login</a>
                      
                    </li>
                     <ul class="nav navbar-nav navbar-right">
                    <li>
                <a href="signup.php">Sign Up</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<br>

<br>
<br>
<br>

<div class="container">
    
    

<div class="jumbotron">		
    
<h2 align="center">Contact Us</h2>
<h3 align="center">We want to hear from you!</h3>
</div>
</div>


<div class="container">

<div class="form">
<form method="POST">
<label for="First_Name">First Name</label>
<input type="text" id="First_Name" name="First_Name">
<div>
<label for="Last_Name ">Last Name</label>
<input type="text" id="Last_Name" name="Last_Name">


<Label for="Email_Address">Email Address</Label>
<input type="text" id="Email_Address" name="Email_Address">
<div class="form-group">
<label for="User_Comments">Comments</label>
<textarea id="User_Comments" class="form-control" rows="400" cols="170" name="User_Comments" style="height: 400px";></textarea>
</div>

<button class="btn btn-lg btn-primary btn-block" type=" submit">Submit</button>
</form>
</div> 
</div>
</div>
</div>










</body>
</html>
