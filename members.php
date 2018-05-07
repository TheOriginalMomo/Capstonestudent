<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>






<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

if (!isset($_SESSION['user'])) {
header('Location: login.php');
exit();
}
echo 'You have successfully logged as '.$_SESSION['user']
?>

<p> hello</p>
</body>
</html>