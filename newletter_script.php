<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	if(isset($_REQUEST['email'])){
		$email = stripslashes($_REQUEST['email']);
    	$email = mysqli_real_escape_string($con, $email);

    	$accDup = " SELECT * FROM `localinewsletter` WHERE email = '$email'";
    	$result = mysqli_query($con, $accDup);
    	if(mysqli_num_rows($result) > 0) { $error[] = 'Newsletter already approved for this email!'; }
    	
    	else {
    		$sql = "INSERT INTO `localinewsletter` (`Email`) VALUES('$email')";
    		$con = mysqli_connect($servername, $username, $password, "member_db");
    		if($con->query($sql)){ echo "<h3>Newsletter subscription approved! </br> Thank you! </h3>"; }
    		}
    	}
    }
	?>
	
</body>
</html>

