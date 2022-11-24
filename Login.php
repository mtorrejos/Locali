<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>

    <link rel="stylesheet" type="text/css" href="Login_Register.css">

</head>
<body>

<?php
    session_start();
    require('config.php');

if(isset($_POST['email'])){

    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);
    $pword = stripslashes($_REQUEST['password']);
    $pword = mysqli_real_escape_string($con,$pword);

    $select = " SELECT * FROM `localiusers` WHERE email = '$email' AND pass = '$pword'";
    $result = mysqli_query($con, $select) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if($rows == 1) {
        $_SESSION['email'] = $email;
        header('Location: FrontPage.php');
        exit();
        $result = 0;
    }
    else {
        echo "<h3>Incorrect Username/password.</h3>";
    }

    }
?>

<div class="form-container">
    <form action="" method="post">
        <h3> Login </h3>
        <input type="email" name="email" required placeholder="E-mail address">
        <input type="password" name="password" required placeholder="Password">
        <input type="submit" value="Login" class="form-btn">
        <p> Not a member? <a href="Registration.php"> Create an Account Now </a></p>
    </form>
</div>
</body>
</html>