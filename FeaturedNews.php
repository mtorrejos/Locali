<?php
	include_once 'topbar.php';
?>

<!-- Featured News -->
    <div class="section-title mb-0">
        <h4 class="m-2 text-uppercase font-weight-bold">Featured News</h4>
    </div>
    <div class="bg-white border border-top-0 p-3">
        <div class="d-flex align-items-center bg-white mb-4" style="height: 105px;">
            <img class="img-thumbnail h-100" src="img/building_SSS.jpg" alt="">
            <div class="w-100 h-100 px-2 d-flex flex-column justify-content-center border border-left-0">
                <div class="mb-2">
                    <a class="badge badge-dark text-uppercase font-weight-semi-bold p-1 mr-2" href="FeaturedNews.php">News</a>
                    <a><small>November 16, 2022</small></a>
                </div>
                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="SSS.php">SSS starts offering calamity assistance to Paeng-affected members, pensioners</a>
            </div>
        </div>
        <div class="d-flex align-items-center bg-white mb-4" style="height: 105px;">
            <img class="img-thumbnail h-100" src="img/waterShortage2.jpg" alt="">
            <div class="w-100 h-100 px-2 d-flex flex-column justify-content-center border border-left-0">
                <div class="mb-2">
                    <a class="badge badge-dark text-uppercase font-weight-semi-bold p-1 mr-2" href="FeaturedNews.php">News</a>
                    <a><small>November 16, 2022</small></a>
                </div>
                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="WaterShortage.php">The Metropolitan Waterworks and Sewerage System approves the water rate hikes, which will be implemented from 2023 to 2027</a>
            </div>
        </div>
        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
            <img class="img-thumbnail h-100" src="img/PHactors.jpg" alt="">
            <div class="w-100 h-100 px-2 d-flex flex-column justify-content-center border border-left-0">
                <div class="mb-2">
                    <a class="badge badge-dark text-uppercase font-weight-semi-bold p-1 mr-2" href="EntertainmentNews.php">Movie</a>
                    <a><small>November 16, 2022</small></a>
                </div>
                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="PHActors.php">PH actors in international films share best practices of foreign counterparts</a>
            </div>
        </div>
        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
            <img class="img-thumbnail h-100" src="https://cdn4.premiumread.com/?url=https://www.manilatimes.net/manilatimes/uploads/images/2022/10/01/113154.jpg&w=825&q=100&f=webp" alt="">
            <div class="w-100 h-100 px-2 d-flex flex-column justify-content-center border border-left-0">
                <div class="mb-2">
                    <a class="badge badge-dark text-uppercase font-weight-semi-bold p-1 mr-2" href="EntertainmentNews.php">Movie</a>
                    <a><small>November 16, 2022</small></a>
                </div>
                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="OnTheJob.php">'On the Job: The Missing 8' to represent PH in Oscars</a>
            </div>
        </div>
        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
            <img class="img-thumbnail h-100" src="https://newsinfo.inquirer.net/files/2022/11/000_32NB87F-620x413.jpg" alt="">
            <div class="w-100 h-100 px-2 d-flex flex-column justify-content-center border border-left-0">
                <div class="mb-2">
                    <a class="badge badge-dark text-uppercase font-weight-semi-bold p-1 mr-2" href="FeaturedNews.php">News</a>
                    <a><small>November 16, 2022</small></a>
                </div>
                <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="ASEAN.php">Asean members back peaceful solution to China-Taiwan row</a>
            </div>
        </div>
    </div>
    </div>

    <!-- Newsletter -->
<form action="" method="post" accept-charset="utf-8">

    <div class="container-fluid pt-5 mb-3 w-50">
        <div class="section-title mb-0">
            <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
        </div>
        <div class="bg-white text-center border border-top-0 p-3">
            <p>Want to receive updates? Sign up for our Newsletter</p>
                <div class="input-group mb-2" style="width: 100%;">
                    <input type="email" class="form-control form-control-lg" name='newsletter_email' placeholder="Your Email">
                        <div class="input-group-append">
                            <input type="submit" name="submit" value="Sign Up" class="btn btn-primary font-weight-bold px-3">
                        </div>
                    </div>
                </div>
            </div>
    
<?php #Newsletter script
    require('config.php');
    if(isset($_POST['newsletter_email'])){
        $email = stripslashes($_REQUEST['newsletter_email']);
        $email = mysqli_real_escape_string($con, $email);

        $accDup = " SELECT * FROM localinewsletter WHERE email = '$email'";
        $result = mysqli_query($con, $accDup);
        if(mysqli_num_rows($result) > 0) { echo '<script> alert("Email already has a newsletter subscription!") </script>'; }

        else if($_REQUEST['newsletter_email'] == NULL){ echo '<script> alert("No Email entered!") </script>'; }
        else {
            $sql = "INSERT INTO localinewsletter (Email) VALUES('$email')";
            $con = mysqli_connect($servername, $username, $password, "member_db");
            if($con->query($sql)){ echo '<script> alert("Newsletter subscription approved! \nThank you!") </script>'; }
            }
        }


    ?>
</form>
    <!-- Newsletter  -->
    
    <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
        <p class="m-0 text-center">&copy; <a>Locali News</a>. All Rights Reserved. 
		
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
