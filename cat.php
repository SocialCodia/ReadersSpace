<?php

require 'database/function.php';

//$books_shuffel = $books->getData();
/*$cat_type = $_GET['cat_type']??'first';
foreach($books->getdata() as $book):
if($book['$cat_type']==$cat_type):*/

?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Type</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="assets/fontawesome-free-5.12.1-web/css/all.css" rel="stylesheet">
    <link rel="stylesheet"  href="css/cat.css">
    <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<?php
?>
</head>
<body style="margin-top:-30px;">

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
        <a href="signup.php" class="login-btn">Join Us</a>
		</div>
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

    <h1><div style="margin-top: 30px;">   <?php echo $_GET['cat_type'] ?? "BOOK TYPE"; ?> </div>  </h1>
		<!--category-->

        <div class="wrapper" >


		<!--post slider-->
		<div class="post-slider">



			<div class="post-wrapper" style="height: 100%; width: 100% ">
            <?php

$cat_type = str_replace(' ', '', $_GET['cat_type']);

foreach ($books->getdata() as $book):
    $dbCatType = preg_replace('/\s+/', '', $book['cat_type']);
    if ($dbCatType === $cat_type):
        $img = $book['book_img'];

        ?>
										                <div class="post">


										            <form action="book.php" >

														<img src="assets/<?php echo $img ?? "assets/firsttype.jpg" ?>" class="slide-image" style="width: 100% ">
										                    <input type="text" name="book_img" value="<?php echo $img ?? "assets/firsttype.jpg" ?>" hidden>

														<div class="post-info ">
															<h6><?php echo $book['book_name'] ?? "BOOK NAME" ?> </h6>
										                    <input type="text" name="book_name" value="<?php echo $book['book_name'] ?? "BOOK NAME" ?>" hidden>
										                                        <input type="text" name="author_name" value="<?php echo $book['author_name'] ?? "BOOK NAME" ?>"  hidden>
															                    <input type="text" name="publish_date" value="<?php echo $book['publish_date'] ?? "BOOK NAME" ?>"  hidden>


										                                        <input type="text" name="book" value="<?php echo $book['book'] ?? "BOOK NAME" ?>"  hidden>

										                                        <input type="text" name="publisher" value="<?php echo $book['publisher'] ?? "BOOK NAME" ?>"  hidden>
										   <input type="text" name="auth_name" value="<?php echo $book['auth_name'] ?? "BOOK NAME" ?>"  hidden>

										   <input type="text" name="auth_info" value="<?php echo $book['auth_info'] ?? "BOOK NAME" ?>"  hidden>


										   <input type="text" name="book_info" value="<?php echo $book['book_info'] ?? "BOOK NAME" ?>"  hidden>
										   <input type="text" name="auth_img" value="<?php echo $book['auth_img'] ?? "BOOK NAME" ?>"  hidden>


										                    <p ><?php echo $book['cat_type'] ?? "BOOK TYPE" ?> </p>

										                    <input type="text" name="cat_type" value="<?php echo $book['cat_type'] ?? "BOOK TYPE" ?>" hidden>
															<h6><input type="submit" name="goto"  class="btn" value=" Read Now" ></h6>
														</div>

										            </div>
										            </form>

										            <?php
    endif;
endforeach;
?>


</div>


</div>
</main>
        <!--Footer-->
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