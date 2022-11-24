<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Locali</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/frontpage.css" rel="stylesheet">
</head>

<body>
<!-- Topbar -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center bg-dark px-lg-5">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-n2">
                        <li class="nav-item border-right border-secondary"> 
                            <a class="nav-link text-body small">  <!--date time-->
                                <div class="date"></div> 
                                <div class="time"></div>
                            </a>
                        </li>
                        <?php
                            if(isset($_SESSION['email'])){
                                echo '<li class="nav-item border-right border-secondary">
                                    <a class="nav-link text-body small">Logged in as: '. $_SESSION['email'] .'</a><a href="Logout.php">Logout</a>
                                    </li>';
                            }
                            else {
                                echo '<li class="nav-item border-right border-secondary">
                                    <a class="nav-link text-body small" href="Registration.php">Login/Register</a>
                                    </li>';
                            }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>      
<!-- Navbar -->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark py-2 py-lg-0 px-lg-5">
        <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">

                <img src="img/Locali.png" width="10%">

                <a href="FrontPage.php" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown">News</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="LatestNews.php" class="dropdown-item">Latest News</a>
                        <a href="FeaturedNews.php" class="dropdown-item">Featured News</a>
                    </div>
                </div>
                <a href="EntertainmentNews.php" class="nav-item nav-link">Entertainment</a>
                <a href="AboutUs.php" class="nav-item nav-link">About Us</a>
            </div>

            <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                <input type="text" class="form-control border-0" placeholder="Search">
                <div class="input-group-append">
                    <button class="input-group-text bg-primary text-dark border-0 px-3"><i
                            class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar -->

