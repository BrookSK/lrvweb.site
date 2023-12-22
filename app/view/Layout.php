<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta name="author" content="Lucas Rodrigues Vacari">
	<meta name="description" content="<?php echo $this->getDescription(); ?>">
	<meta name="keywords" content="<?php echo $this->getKeywords(); ?>">
	<!-- Page Title -->
	<title>
		<?php echo $this->getTitle(); ?>
	</title>
	<!-- Favicon -->
	<link rel="icon" href="<?php echo DIRIMG . 'icon.png' ?>">
	<!-- Google Fonts -->
	<link
		href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
		rel="stylesheet">
	<!-- Bootstrap css -->
	<link href="<?php echo DIRCSS . 'bootstrap.min.css' ?>" rel="stylesheet" media="screen">
	<link href="<?php echo DIRCSS . 'bootstrap-icons.css' ?>" rel="stylesheet" media="screen">
	<!-- Font Awesome icon css-->
	<link href="<?php echo DIRCSS . 'font-awesome.min.css' ?>" rel="stylesheet" media="screen">
	<link href="<?php echo DIRCSS . 'flaticon.css' ?>" rel="stylesheet" media="screen">
	<!-- Swiper's CSS -->
	<link rel="stylesheet" href="<?php echo DIRCSS . 'swiper.min.css' ?>">
	<link rel="stylesheet" href="<?php echo DIRCSS . 'swiper-bundle.min.css' ?>">
	<!-- Animated css -->
	<link href="<?php echo DIRCSS . 'animate.css' ?>" rel="stylesheet">
	<!-- Magnific Popup CSS -->
	<link href="<?php echo DIRCSS . 'magnific-popup.css' ?>" rel="stylesheet">
	<!-- Animation Headline CSS -->
	<link href="<?php echo DIRCSS . 'animation-headline.css' ?>" rel="stylesheet">
	<!-- Slick nav css -->
	<link rel="stylesheet" href="<?php echo DIRCSS . 'slicknav.css' ?>">
	<!-- Main custom css -->
	<link href="<?php echo DIRCSS . 'style.css' ?>" rel="stylesheet" media="screen">
	<!-- Boxicons css -->
	<link href="<?php echo DIRCSS . 'boxicons.min.css' ?>" rel="stylesheet" media="screen">
	<!-- Glightbox css -->
	<link href="<?php echo DIRCSS . 'glightbox.min.css' ?>" rel="stylesheet" media="screen">
	<!-- Remixicons css -->
	<link href="<?php echo DIRCSS . 'remixicon.css' ?>" rel="stylesheet" media="screen">

	<!-- Head -->
	<?php echo $this->addHead(); ?>
</head>

<body>
	<!-- Header Section Start -->
	<header id="header" class="fixed-top ">
		<div class="container d-flex align-items-center justify-content-between">

			<?php echo $this->addHeader(); ?>

		</div>
	</header>
	<!-- Header Section End -->

	<?php echo $this->addMain(); ?>

	<!-- Footer Section starts -->
	<footer id="footer">

		<?php echo $this->addFooter(); ?>

		<div class="footer-top">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 col-md-6 footer-contact">
						<h3>Resi.</h3>
						<p>
							A108 Adam Street <br>
							New York, NY 535022<br>
							United States <br><br>
							<strong>Phone:</strong> +1 5589 55488 55<br>
							<strong>Email:</strong> info@example.com<br>
						</p>
					</div>

					<div class="col-lg-2 col-md-6 footer-links">
						<h4>Useful Links</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>Our Services</h4>
						<ul>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
							<li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
						</ul>
					</div>

					<div class="col-lg-4 col-md-6 footer-newsletter">
						<h4>Join Our Newsletter</h4>
						<p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
						<form action="" method="post">
							<input type="email" name="email"><input type="submit" value="Subscribe">
						</form>
					</div>

				</div>
			</div>
		</div>

		<div class="container d-md-flex py-4">

			<div class="me-md-auto text-center text-md-start">
				<div class="copyright">
					&copy; Copyright <strong><span>Resi</span></strong>. All Rights Reserved
				</div>
				<div class="credits">
					Designed by <a href="#">BootstrapMade</a>
				</div>
			</div>
			<div class="social-links text-center text-md-right pt-3 pt-md-0">
				<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
				<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
				<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
				<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
				<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
			</div>
		</div>
	</footer>
	<!-- Footer Section Ends -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<script src="<?php echo DIRJS . 'purecounter_vanilla.js' ?>"></script>
	<script src="<?php echo DIRJS . 'bootstrap.bundle.min.js' ?>"></script>
	<script src="<?php echo DIRJS . 'glightbox.min.js' ?>"></script>
	<script src="<?php echo DIRJS . 'isotope.pkgd.min.js' ?>"></script>
	<script src="<?php echo DIRJS . 'swiper-bundle.min.js' ?>"></script>
	<script src="<?php echo DIRJS . 'validate.js' ?>"></script>
	<script src="<?php echo DIRJS . 'main.js' ?>"></script>
</body>

</html>