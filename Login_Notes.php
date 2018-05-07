<?php
/* User login process, checks if user exists and password is correct */

// Escape Email_Address to protect against SQL injections
//User_ID
//Last_Name
//Email_Address_Address
//User_Name
//Password
//Comments
$Email_Address = $mysqli->escape_string($_POST['Email_Address']);
$result = $mysqli->query("SELECT * FROM users WHERE Email_Address='$Email_Address'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that Email_Address doesn't exist!";
    header("location: error.php");
}
else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) ) {
        
        $_SESSION['Email_Address'] = $user['Email_Address'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['active'] = $user['active'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: profile.php");
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error.php");
    }
}

