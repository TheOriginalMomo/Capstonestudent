<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<?php
//$dbhost='localhost';
//$ this is where databse informatio would go
//

//$user='root';
//$password='';
//$db='capstone';



$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'capstone1234';
$dbname = 'capstone';


// This will connect to the server and then the correct database
$conn = mysqli_connect($dbhost, $dbuser, $dbpass); 
mysqli_select_db($conn,$dbname) or die ('Error connecting to mysql');


//mysql_connect("$dbhost","$username","$password");
//$db= new mysqli('localhost',$user,$pass,$db); or die ("Unable to connect to database");

// Check connection to the to the database
//chekced other typesof sql
//MySQLI Proceudral works not MYSQL

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

<html> hello
?>

</body>

</body>
</html>