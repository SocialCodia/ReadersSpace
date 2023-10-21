<?php


$auth_name= $_GET['auth_name'];
$publisher = $_GET['publisher'];
$genre = $_GET['cat_type'];
// $preface_of_book = $_GET['cat_type'];
$pdf_link= $_GET['book'];
$book_img= $_GET['book_img']; 
$publish_date= $_GET['publish_date'];
$auth_info= $_GET['auth_info'];
$book_name= $_GET['book_name'];
$book_info= $_GET['book_info'];
$auth_img= $_GET['auth_img'];
 ?>

<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>book</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="assets/fontawesome-free-5.12.1-web/css/all.css" rel="stylesheet">
    <!-- <link rel="stylesheet"  href="css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<style>
    @import url('https://fonts.googleapis.com/css?family=Coda+Caption:800|Lacquer|Lemonada|Lora|Merriweather|Modak|Montserrat|Noto+Serif|Odibee+Sans|Roboto+Mono|Roboto+Slab|Sriracha&display=swap');

body {
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    font-family: "roboto", sans-serif;
    font-size: 14px;
    color: #000;
    background: #dd2476;
}
.content p {
    color: white;
    line-height: 25px;
    text-align: left;
}

:root {
	--Lacquer: "Lacquer", cursive;
	--Lemonada: "Lemonada", cursive;
	--Lora: "Lora", cursive;
	--Merriweather: "Merriweather", cursive;
	--Modak: "Modak", cursive;
	--Montserrat: "Montserrat", cursive;
	--Noto_Serif: "Noto+Serif", cursive;
	--Odibee_Sans: "Odibee+Sans", cursive;
	--Roboto_Mono: "Roboto+Mono", cursive;
	--Roboto_Slab: "Roboto+Slab", cursive;
	--Lobster: "Lobster", cursive;

	--light-black: #2e2c2caf;
	--bggradient: linear-gradient(to bottom, #c41966, #ff512f);
	--light-gray: rgb(231, 225, 225);
}

header {
	position: fixed;
	background: #494b52;
	padding: 20px;
	width: 100%;
	height: 30px;
	z-index: 5;
}

.left-area h4 {
	position: relative;
	color: #fff;
	margin: -35px 0 0 5px;
	text-transform: uppercase;
	font-size: 22px;
	font-weight: 900;
}

.left-area span {
	color: #0a7bc2;
}

.login-btn {
	padding: 5px;
	background: #589fd1;
	text-decoration: none;
	float: right;
	margin-top: -30px;
	margin-right: 40px;
	border-radius: 2px;
	font-size: 15px;
	font-weight: 600;
	color: #fff;
	transition: 0.5s;
	transition-property: background;
}

.login-btn:hover {
	background: #4c8dba;
}

.sidebar {
	background: #37453b;
	margin-top: 40px;
	padding-top: 30px;
	position: fixed;
	left: 0;
	width: 250px;
	height: 100%;
	transition: 0.5s;
	transition-property: left;
}

.sidebar .profile-img {
	width: 100px;
	height: 100px;
	border-radius: 100px;
	margin-bottom: 10px;
}

.sidebar h4 {
	color: #ccc;
	margin-top: 0;
	margin-bottom: 20px;
}

.sidebar a {
	color: #fff;
	display: block;
	width: 100%;
	line-height: 60px;
	text-decoration: none;
	padding-left: 40px;
	box-sizing: border-box;
	transition: 0.5s;
	transition-property: background;
}

.sidebar a:hover {
	background: #19B3D3;
}

.sidebar i {
	padding-right: 10px;
}

label #sidebar-btn {
	top: 6px;
	z-index: 1;
	color: #fff;
	position: fixed;
	cursor: pointer;
	left: 300px;
	font-size: 20px;
	margin: 5px 0;
	transition: 0.5s;
	transition-property: color;
}

label #sidebar-btn:hover {
	color: #19B3D3;
}

#check:checked~.sidebar {
	left: -190px;
}

#check:checked~.sidebar a span {
	display: none;
}

#check:checked~.sidebar a {
	font-size: 20px;
	margin-left: 170px;
	width: 80px;
}

.content {
	margin-left: 250px;
	background: url();
	background-position: center;
	background-size: cover;
	height: 100vh;
	transition: 0.5s;
	z-index: 0;
	position: relative;
}

#check:checked~.content {
	margin-left: 60px;
}

#check {
	display: none;
}



.content .container .row {
	display: -ms-flexbox;
	display: flex;
	-ms-flex-wrap: wrap;
	flex-wrap: wrap;

}

.content .container .segment-onee {
	float: left;
	width: 40%;
	height: 100%;
	margin-top: 40px;
	padding-top: 30px;
	padding-bottom: 80px;
}

.content .container .segment-onee img {
	padding: 30px;
	margin-top: 10px;
	margin-left: 20px;
	width: 400px;
	height: 500px;
}

.content .container .segment-twoo {
	float: left;
	width: 60%;
	height: 100%;
	margin-top: 40px;
	padding-top: 30px;
	display: block;
	padding-bottom: 110px;

}

.content .container .segment-twoo .section-title {
	padding-top: 30px;
	padding-bottom: 70px;
	padding-left: 15px;
}

.content .container .segment-twoo .section-title h1,
h3,
h5,
p {
	font-weight: 40px;
	color: #fff;
	font-family: 'Times New Roman', Times, serif;
	font-weight: 700;
	margin: 0;
	letter-spacing: 1px;
	line-height: 50px;
	border-bottom: 1px solid rgba(251, 255, 5, 0.877);
}

.content .container .segment-twoo .section-title button {
	margin-left: 7px;
	margin-top: 20px;
	background-color: DodgerBlue;
	border: none;
	border-radius: 10px;
	color: white;
	padding: 12px 30px;
	cursor: pointer;
	font-size: 20px;
}

.content .container .segment-twoo .section-title .btn:hover {
	background-color: RoyalBlue;
}


.content .section-1 {
	padding: 2vmin 0;
}

.content .section-1 .author h1 {
	width: bold;
	margin-top: 20px;
	font-family: 'Times New Roman', Times, serif;
	border-bottom: 1px solid rgba(251, 255, 5, 0.877);
}

.content .section-1 .row .col-md-6 .pray img {
	padding-top: 100px;
	height: 450px;
	width: 300px;
	opacity: 0.8;
	width: 80%;
}

.content .section-1 .row .col-md-6 last-child {
	position: relative;
}

.content .section-1 .row .col-md-6 .panel {
	padding-top: 120px;
	position: relative;
	top: 2vmin;
	background: rgb(63, 192, 186);
	border-radius: 5px;
	text-align: left;
	padding: 6vmin 5vmin 2vmin 6vmin;
	box-shadow: 0px 25px 42px rgba(0, 0, 0, 0.2);
	font-family: var(--Lemonada);
	z-index: 1;
}

.content .section-1 .row .col-md-6 .panel h2 {
	font-weight: bold;
	padding-top: 0;
}

.content .section-1 .row .col-md-6 .panel p {
	color: #666;
	line-height: 20px;
}


/*.content p {
	color: #999;
	line-height: 25px;
	text-align: left;
}*/

.content h2,
h3 {
	color: #fff;
}

.content h2 {
	font-size: 18px;
}

.content .footer-top {
	background: #111;
	padding-top: 80px;
}

.content .segment-one h4 {
	color: #fff;
	font-family: Poppins;
	text-transform: uppercase;
}

.content .segment-one h4:before {
	content: '|';
	color: #c65039;
	padding-right: 10px;
}

.content .segment-one ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

.content .segment-one a {
	text-decoration: none;
}

.content .segment-one ul li {
	border-bottom: 1px solid rgba(255, 255, 255, 0.3);
	line-height: 40px;
}

.content .segment-one ul li a {
	color: #fff;
	text-decoration: none;
}

.content .segment-two h4 {
	color: #fff;
	font-family: Poppins;
	text-transform: uppercase;
}

.content .segment-two h4:before {
	content: '|';
	color: #c65039;
	padding-right: 10px;
}

.content .segment-two a {
	background: #494848;
	width: 40px;
	height: 40px;
	display: inline-block;
	border-radius: 50%;
}

.content .segment-two a i {
	font-size: 20px;
	color: #fff;
	padding: 10px 11px;
}

.content .segment-three h4 {
	color: #fff;
	font-family: Poppins;
}

.content .segment-three h4:before {
	content: '|';
	color: #c65039;
	padding-right: 10px;
}

.content .segment-three form input[type=submit] {
	background: #c65039;
	border: none;
	padding: 3px 15px;
	margin-left: -5px;
	color: #fff;
	text-transform: uppercase;
}

.content .footer-bottom-text {
	text-align: center;
	background: #000;
	line-height: 75px;
	margin: 0px;
}

.content p>span {
	color: #ff512f;
}
.content .container .segment-twoo .section-title h1, h3, h5 {
    font-weight: 40px;
    color: #fff;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 700;
    margin: 0;
    letter-spacing: 1px;
    line-height: 50px;
    border-bottom: 1px solid rgba(251, 255, 5, 0.877);
}

</style>
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

		<!--book START-->
        <section>
        
        <div class="container">
            <div class="row padd-15">
                <div class="col-lg-6 col-sm-12 segment-onee">
                    <img src="assets/<?php echo  $book_img  ??"assets/firsttype.jpg"?>" alt="BOOKS" height="400px" width="300px">

                </div>
                <div class="col-lg-6 col-sm-12 segment-twoo">
                    <div class="section-title">
                        
                        <h1>Book Name: <?php echo $book_name ; ?></h1>
                        <h3>Author Name: <?php echo  $auth_name ; ?></h3>
                        <h5>Publisher: <?php echo  $publisher ; ?></h5>
                        <h5>Publishe Date : <?php echo $publish_date ; ?></h5>
                        <h5>Genre: <?php echo  $genre ; ?> </h5>
                        <p>preface of book:<?php echo  $book_info ; ?> </p>
                       <a href="assets/<?php echo  $pdf_link ?>" target="blank"><button class="btn"><i class="fa fa-download"></i> Read
                                Now</button></a>
                        <a href="downloadpdf.php?file= <?php echo  $pdf_link ?>" target="blank"><button class="btn"><i class="fa fa-download"></i> Download
                                Now</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main class="section-1">
            <div class="container text-center">
            	<div class="author text-center">
            		<h1>About Author</h1>
            	</div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="pray">
                            <img src="assets/<?php echo  $auth_img ?>" alt="pray">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel text-left">
                            <h2> <?php echo  $auth_name ; ?></h2>
                            <h6>
                            	 <?php echo  $auth_info ; ?>
                            </h6>
                          <!--   <h6>
                                It is a container element started by  tag and ended by 
                                tag. Every HTML document should contain the title to be displayed in the title bar of the browser window. If an HTML document does not contain a title, then the file name of the HTML document is  title bar. System Security is written in the TITLE element and thus it is displayed in the browser's title window. The TITLE element 
                                is placed in HEAD element.
                            </h6> -->
                        </div>
                    </div>
                </div>
            </div>
        </main>
        



		<!--book END-->



		
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
                    <p class="text-left" style="border:none">Follow us on our social media profile in order to keep updated...</p>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href=""><i  class="fab fa-telegram"></i></a>
                </div>
                <div class="col-lg-4 col-sm-6 segment-three">
                    <h4>Newslette</h4>
                    <p class="text-left" style="border:none">Stay Updated</p>
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