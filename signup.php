<?php require_once 'registration/controllers/authController.php'; ?>

<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>signup</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="assets/fontawesome-free-5.12.1-web/css/all.css" rel="stylesheet">
    <link rel="stylesheet"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<body>

				<!--NAVBAR & SIDEBAR start-->

	<input type="checkbox" id="check">
	
	<header>
		<label for="check">
			<i class="fa fa-bars" id="sidebar-btn"></i>
		</label>
		<div class="left-area">
			
			<h4>Readers<span>Space</span></h4>
		</div>
		<div class="right-area">
		<a href="signup.php" class="login-btn">Join Us</a>		</div>
	</header>
	<div class="sidebar">
		<center>
			<img src="assets/sidebar.jpg" class="profile-img" alt="">
			<h4>Tejas Gurav</h4>
		</center>
		<a href="index.php"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a>
        <a href="category.php"><i class="fa fa-book" aria-hidden="true"></i><span>eBooks</span></a>
        <a href="about.php"><i class="fa fa-info-circle" aria-hidden="true"></i><span>About us</span></a>
        <a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i><span>Contact us</span></a>

		

	</div>
	<div class="content">

		<!--signup START-->

        <div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 form-div" >
				<form action="signup.php" method="post">
					<h3 class="text-center"> Register</h3>

					<?php  if (count($errors) > 0): ?>
					<div class="alert alert-danger">
						<?php foreach($errors as $error): ?>
							<li><?php echo $error; ?></li>
						<?php endforeach; ?>
					</div>
					<?php endif; ?>

					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="username" value="<?php echo $username; ?>" class="form-control form-control-lg">
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" value="<?php echo $email; ?>"class="form-control form-control-lg">
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control form-control-lg">
					</div>

					<div class="form-group">
						<label for="passwordConf">Confirm Password</label>
						<input type="password" name="passwordConf" class="form-control form-control-lg">
					</div>

					<div class="form-group">
						<button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">Sign Up</button>
					</div>
					<p class="text-center">Already a member...?? <a href="login.php">Sign In</a></p>
					
				</form>				
			</div>			
		</div>
	</div>


		<!--signup END-->



		
            <!--FOOTER START-->                
        <footer>
        <div class="footer-top">
            <div class="container text-left">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 segment-one">
                        <h4> Important Links</h4>
                        <ul>
						<a href="about.php"><li>Why Readers Point</li></a>
                            <a href="category.php"><li>eBooks</li></a>
                            <a href="signup.php"><li>Sign Up</li></a>
                            <a href="contact.php"><li>Contact us</li></a>

                        </ul>
                    </div>
                <div class="col-lg-4 col-sm-6 segment-two">
                    <h4 class="text-light">Follow Us</h4>
                    <p class="text-left">Follow us on our social media profile in order to keep updated...</p>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href=""><i  class="fab fa-telegram"></i></a>
                </div>
                <div class="col-lg-4 col-sm-6 segment-three">
                    <h4>Newslette</h4>
                    <p class="text-left">Stay Updated</p>
                    <form action="">
                                <input type="Email" placeholder="Enter your email id">
                                <input type="submit" value="Subscribe">
                                <div class="input-group-prepend">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <p class="footer-bottom-text"> Copyright&copy;2020 All rights reserved This tamplate is made with by<span>Tejas Gurav.</span></p>
     </footer>				
	</div>

						
						
	<script type="text/javascript" src="assets/swiper.min.js"></script>
	<script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 40,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
			<!--NAVBAR & SIDEBAR END-->
			<!--front page-->

    <!--front page end-->
	<footer>
		
	</footer>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="script.js"></script>

</body>
</html>