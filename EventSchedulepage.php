
<!DOCTYPE html>
<html>

<head>
	<title></title>


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
$Event_Type=$_POST['Eventlist'];
$User_Comments=$_POST['User_Comments'];
$sql = "INSERT INTO `events` (First_Name, Last_Name, Email_Address, Username, Event_Type, User_Comments) VALUES ('$First_Name','$Last_Name', '$Email_Address', '$Username', '$Event_Type','$User_Comments')";

  $result = mysqli_query($conn, $sql);
        if($result){
            echo "User Comment Entered Successfully.";
        }else{
            echo "User Registration Failed";
        }


        if(isset($_GET['submit']))
{
    $name=$_GET['Eventlist'];
    $c=mysql_connect("localhost","root","");
    mysql_select_db("capstone");
    $ins=mysql_query("insert into events (Eventlist) values ('$Eventlist')",$c);
    if($ins)
    {
        echo "<br>".$name."inserted";
    }
    else
    {
        echo mysql_error();
    }
}
    
  

}



?>
<html>
<head>
  <title>Schedule a Event</title>
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




<link rel="Stylesheet" type="text/css" href="color_scheme3.css">
</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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


            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->

    </nav>



<br>
<br>
<br>
<br>

</ul>

 <form class="form" method="post" id="eventform">
  <label for="First_Name">First Name</label>
<input type="text" id="First_Name" name="First_Name">
<div>
<label for="Last_Name ">Last Name</label>
<input type="text" id="Last_Name" name="Last_Name">


<Label for="Email_Address">Email Address</Label>
<input type="text" id="Email_Address" name="Email_Address">


<Label for="Username">Username</Label>
<input type="text" id="Username" name="Username">

<br>
<div class="form-group">
<label for="User_Comments">Comments</label>
<textarea id="eventform" class="form-control" name="User_Comments" style="height: 400px";></textarea>
</div>

<div class="form-group">
<select name="Eventlist" form="eventform" class="form-control" >
  <option value" name="Event" value="Birthday" checked> Birthday</option>
  <option value" name="Event" value="Wedding "> Wedding</option>
  <option value" name="Event" value="Seminar"> Seminar</option>
  <option value" name="Event" value="Graduation">Graduation</option>
  <option value" name="Event" value="Business Package "> Business</option>
  <option value" name="Event" value="Meeting"> Meeting</option>
</select>
</div>
</form> 

<button class="btn btn-lg btn-primary btn-block" type=" submit">Register</button>
</form>
</div>
  </form>
</div>





</body>
</html>
