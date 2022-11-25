<?php
	include_once 'topbar.php';
?>

<!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="position-relative mb-3">
                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-3">
                            </div>
                            <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">About Us </h1>
                            
							<p>With first-rate entertainment and fast, responsible, and accurate news and information delivery, we improve the lives of Filipinos everywhere. Locali News is your go-to source of reliable news, both local and international.</p>
							
							<p>Locali News is a pioneer in digital journalism. Formed recently in 2022, Locali News is fresh out of the oven, ready to serve you with the common, and uncommon goings-ons in the world.
							Additionally, it was among the first to offer news programs on a variety of social media channels.
							It is run by digital journalists who can creatively employ cutting-edge technology to deliver news to a global audience.</p>

							<p>As a media outlet, Locali News upholds the greatest standards of journalism, pledging to offer truthful, untainted, and impartial news while remaining aware of the demands and expectations of its audience. </p>

							<p>We are young journalists that are experienced in our line of work. We are skilled in traditional news reporting and also knowledgeable in the application of digital technology.</p>
							
							<p>While maintaining a commitment to our journalistic ethics and ideals, we are an inclusive, dynamic, open-minded organization that is constantly growing. </p>
							
                            <p>We are a dependable source of international material and a leading supplier of top-notch Filipino programming globally. </p>
					   
                        </div>     
                    </div>
				</div>
 
    <div class="col-lg-4">
        <form action="" method="post" accept-charset="utf-8">   
            <div class="mb-4">
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
		
