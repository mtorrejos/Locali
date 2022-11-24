<?php

@include 'config.php';

if(isset($_POST['submit'])){

    $fName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pword = md5($_POST['password']);
    $cpword = md5($_POST['cpassword']);
    $gender = $_POST['gender'];

    $result = mysql_query("select * from user_form where email = '$email' && password = '$pword'")
                    or die("Failed to query database ".mysql_error());
    $row = mysql_fetch_array($result);
    if ($row['email'] == $email) {
        echo "Email is already used! Use another email to register";
    } else {
        
    }
    
    

    // $select = " SELECT * FROM `user_form` WHERE email = '$email'  && password = '$pword' ";
    // $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0) {

        $error[] = 'Account already exists!';

    } else{

        if($pword != $cpword){
            $error[] = 'Password does not match!';
        } else{
            $insert = "INSERT INTO member_form(firstName, lastName, email, password, gender) VALUES('$fName', '$lName', '$email', '$pword', '$gender')";
            mysqli_query($conn, $insert);
            header('location: Login.php');
        }
    }
}
?>

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

<div class="form-container">
    <form action="" method="post">
        <h3> Registration </h3>
        <?php
        if(isset($error)){
            foreach($error as $error) {
                echo '<span class="error-msg">' .$error. ' </span>';
            };
        };
        ?>
        <input type="text" name="fName" required placeholder="First name">
        <input type="text" name="lName" required placeholder="Last name">
        <input type="email" name="email" required placeholder="E-mail address">
        <input type="password" name="password" required placeholder="Password">
        <input type="password" name="cPassword" required placeholder="Confirm password">
        <select name="gender">
            <option value="male"> Male</option>
            <option value="female"> Female</option>
            <option value="none"> Prefer not to state</option>
        </select>
        <input type="submit" value="Register" class="form-btn">
        <p> Already have an account? <a href="Login.php"> Login Now </a></p>
    </form>
</div>
</body>
