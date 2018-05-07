<!DOCTYPE html>


<?php

//User_ID
//Last_Name
//Email_Address_Address
//Useername
//Password
//Comments

require_once('action_page.php');
    // If the values are posted, insert them into the database.
 
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
$Username =mysqli_real_escape_string($conn,$_POST['Username']);
$Password = $_POST['Password'];



$sql = "INSERT INTO `user_info` (First_Name, Last_Name, Email_Address, Username, Password) VALUES ('$First_Name','$Last_Name', '$Email_Address', '$Username', '$Password')";

  $result = mysqli_query($conn, $sql);
        if($result){
            echo "User Comment Entered Successfully.";
        }else{
            echo "User Registration Failed";
        }
    
  

}




//User Login


?>


<html>
<head>
	<title></title>


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
<!---          - - - - - - - - -  - - - - - - - - -  - - - -  - - - - - -->

<!--<meta http-equiv="refresh" content="20;url=Homepage2.html" />-->


</script>

</head>
<body>

    <nav class="navbar-inverse navbar-fixed-top" role="navigation">
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


<div class="container">

  <br>

<h2>Sign Up</h2>


<!--<form method="POST" class="form-group">
<label for="First_Name">First Name</label>
<input type="First_Name" id="First_Name" name="First_Name">

<label for="Last_Name ">Last Name</label>
<input type="Last_Name" id="Last_Name" name="Last_Name">


<Label for="Email_Address">Email Address</Label>
<input type="Email_Address" id="Email_Address" name="Email_Address">


<Label for="Username">Username</Label>
<input type="Username" id="Username" name="Username">

<Label for="Password">Password</Label>
<input type="Password" id="Password" name="Password">

<button class="btn btn-lg btn-primary btn-block" type=" submit">Register</button>
</form>
</div>
-->

<div class="wrapper">
  <h1>Register For An Account</h1>

  <?php if (isset($smsg)) {?><div class="alter alert-success" role="alert"> <?php echo $smsg; ?></div> <?php } ?>


  <?php if (isset($fmsg)) {?><div class="alter alert-danger" role="alert"> <?php echo $fmsg; ?></div> <?php } ?>
  <form class="form" method="post">
  <label for="First_Name">First Name</label>
<input type="text" id="First_Name" name="First_Name">
<div>
<label for="Last_Name ">Last Name</label>
<input type="text" id="Last_Name" name="Last_Name">


<Label for="Email_Address">Email Address</Label>
<input type="text" id="Email_Address" name="Email_Address">


<Label for="Username">Username</Label>
<input type="text" id="Username" name="Username">

<Label for="Password">Password</Label>
<input type="text" id="Password" name="Password">

<button class="btn btn-lg btn-primary btn-block" type=" submit">Register</button>
</form>
</div>
  </form>
</div>













</body>
</html>