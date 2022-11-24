<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration </title>

    <link rel="stylesheet" type="text/css" href="Login_Register.css">
</head>
<body>

<?php

require('config.php');

if(isset($_REQUEST['fName'])){

    $fName = stripslashes($_REQUEST['fName']);
    $fName = mysqli_real_escape_string($con,$fName );
    $lName = stripslashes($_REQUEST['lName']);
    $lName = mysqli_real_escape_string($con, $lName);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);
    $pword = stripslashes($_REQUEST['password']);
    $pword = mysqli_real_escape_string($con,$pword);
    $cpword = stripslashes($_REQUEST['cPassword']);
    $cpword = mysqli_real_escape_string($con,$cpword);
    $gender = stripslashes($_REQUEST['gender']);
    $gender = mysqli_real_escape_string($con,$gender);

    $accDup = " SELECT * FROM `localiusers` WHERE email = '$email'";
    $result = mysqli_query($con, $accDup);

    if(mysqli_num_rows($result) > 0) { $error[] = 'Account already exists!'; }
    else if($pword != $cpword) {$error[] = 'Passwords do not match!'; } 
    else{
    $sql = "INSERT INTO `localiusers` (`FirstName`, `LastName`, `Email`, `Pass`, `Gender`) VALUES('$fName', '$lName', '$email', '$pword', '$gender')";
    $con = mysqli_connect($servername, $username, $password, "member_db");
    $accountConf = 'Account Successfully Created!';
    if($con->query($sql)){}
    }
}
?>
<div class="form-container">
    <form action="" class="form" method="post">
        <h3> Registration </h3>
        <?php
        if(isset($error)){
            foreach($error as $error) {
                echo '<span class="error-msg">' .$error. ' </span>';
            };
        };
        $error = NULL;
        $accountConf = NULL;
        ?>

        <input type="text" name="fName" required="true" placeholder="First name">
        <input type="text" name="lName" required="true" placeholder="Last name">
        <input type="email" name="email" required="true" placeholder="E-mail address">
        <input type="password" name="password" required="true" placeholder="Password">
        <input type="password" name="cPassword" required="true" placeholder="Confirm password">
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="none">Prefer not to state</option>
        </select>
        <input type="submit" value="Register" class="form-btn">
        <p> Already have an account? <a href="Login.php"> Login Now </a></p>
    </form>
</div>
</body>
