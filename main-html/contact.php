<?php 
session_start();
$message = $_SESSION['message'];
unset($_SESSION['message']);
?>
<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
	<meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<!-- Fav Icon  -->
<link rel="shortcut icon" href="images/favicon-32x32.png">

<!-- Site Title  -->
<title>Genesis Blockchain Labs</title>


<!-- Bundle and Base CSS -->
<link rel="stylesheet" href="assets/css/vendor.bundle.css?ver=1930">
<link rel="stylesheet" href="assets/css/style-dark.css?ver=1930" id="changeTheme">
<!-- Extra CSS -->
<link rel="stylesheet" href="assets/css/theme.css?ver=1930">
<!-- font awsome  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- slider  -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />


</head>


    <body class="nk-body body-wider theme-dark mode-onepage">

	<div class="nk-wrap">
		<header class="nk-header page-header is-transparent is-sticky is-shrink is-dark" id="header">
		    <?php include("includes/headerInner.php"); ?>
             <!-- ======= Contact Section ======= -->
    <section class="section section-contact tc-light bg-theme" id="contact">
    <div class="section-head text-center wide-auto-sm">
                        <h2 class="title title-s4" title="Contact">Contact</h2>
                        <p>Any question? Reach out to us and we’ll get back to you shortly.</p>
                    </div>
      <div class="container" data-aos="fade-up">
                    

        <!-- <div class="heading">
          <h1 class="heading_text"><img class="heading_logo" src="img/heading_left_logo.png" alt=""> CONTACT <span class="heading_bold">US </span><img class="heading_logo" src="img/heading_right_logo.png" alt=""></h1>
          <p class="heading_para">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br> incididunt ut laboure et dolore magna aliqua."</p>
        </div> -->

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="fa fa-map-marker"></i>
                <h4>Location:</h4>
                <p>GBL LABS PRIVATE LIMITED
                   Nakshatra Altitude Towers, Karmanghat,Hyderabad, Telangana, India</p>
              </div>

              <div class="email">
                <i class="fa fa-envelope"></i>
                <h4>Email:</h4>
                <p>support@genesisblockchainlabs.com</p>
              </div>

              <!-- <div class="phone">
                <i class="fa fa-phone"></i>
                <h4>Call:</h4>
                <p>(1) 805 439 1288</p>
              </div> -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3808.365343583885!2d78.52960371487573!3d17.346144388103326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb988ffc0beabd%3A0xc25a9f32577394f!2sKarmanghat%20Rd%2C%20Hyderabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1640234082695!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen="" loading="lazy"></iframe>

              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> -->
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="form/contact.php" method="post" role="form" class="php-email-form">
			  <?php if(isset($message)){ ?>
				<div class="alert alert-success" role="alert">
					<?php echo $message; ?>
				</div>
			  <?php } ?>	
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
        
		</header>
       
		
		<?php include("includes/footer.php"); ?>
	</div>
	
	<div class="preloader"><span class="spinner spinner-round"></span></div>
	
	<!-- JavaScript -->
	<script src="assets/js/jquery.bundle.js?ver=1930"></script>
	<script src="assets/js/scripts.js?ver=1930"></script>
	<script src="assets/js/charts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


</body>

</html>