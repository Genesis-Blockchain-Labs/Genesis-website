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

<!--  wallet slider  -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />


</head>


    <body class="nk-body body-wider theme-dark mode-onepage">

	<div class="nk-wrap">
		<header class="nk-header page-header is-transparent is-sticky is-shrink is-dark" id="header">
			<?php include("includes/headerInner.php"); ?>
            <!-- Banner @s -->
            <div class="header-banner bg-theme-dark">
                <div class="nk-banner">
                   
                </div><!-- .nk-banner -->
                <div class="nk-ovm mask-c-dark shape-v mask-contain-bottom"></div>
                
                <!-- Place Particle Js -->
                <!-- <div id="particles-bg" class="particles-container particles-bg" data-pt-base="#00c0fa" data-pt-base-op=".3" data-pt-line="#2b56f5" data-pt-line-op=".5" data-pt-shape="#00c0fa" data-pt-shape-op=".2"></div> -->
            </div>
			<!-- .header-banner @e -->
		</header>
 
        <section>
            <div class="gensis-wallet-bg">
                <img src="images/banner1.jpg" alt="">
            </div>
        </section>
    
        <main class="nk-pages">
            <section class="section products ov-h " >
                <div class="container">
                    <!-- Block @s -->
                    <div class="nk-block nk-block-text-wrap gensis-update">
                        <div class="row  align-items-center justify-content-center justify-content-md-between gutter-vr-30px">
                            <div class="col-mb-9 col-sm-7 col-md-6 col-lg-5 order-md-last">
                                <div class="nk-block-img">
                                    <div class="items">
                                        <div><img src="images/Genesis-Wallets.png"></div>
                                        <div><img src="images/mobileslider_2.png"></div>
                                        <div><img src="images/mobileslider_3.png"></div>
                                        <div><img src="images/mobileslider_4.png"></div>
                                        <div><img src="images/mobileslider_5.png"></div>
                                        <div><img src="images/mobileslider_6.png"></div>
                                        <div><img src="images/mobileslider_7.png"></div>
                                    </div>
                                    <!-- <img src="images/Genesis-Wallets.png" alt="gfx"> -->
                                </div>
                            </div>
                            <div class="col-sm-10 col-md-6 text-center text-md-left">
                                <div class="nk-block-text">
                                    <h2 class="title products_head">Genesis Wallet</h2>
                                    <p class="lead products_para">

                                        The Genesis blockchain lab wallets are going to support trade, buy, and exchange of blockchain assets. Multiple transactions are going to be possible for users everyday. Customers will be able to choose a subscription based monthly plan rather than paying a specific fee for each transaction. This reduces the hassle of paying some amount during every transaction and the subscription also reduces the overall transaction fee.</p>
                                    <!-- <a href="https://www.youtube.com/watch?v=SSo_EIwHSd4" class="video-popup btn-play-wrap btn-play-wrap-s1">
                                        <div class="btn-play btn-play-sm btn-play-s2">
                                            <em class="btn-play-icon"></em>
                                        </div>
                                        <div class="btn-play-text">
                                            <span class="text-sm">Watch Video</span>
                                            <span class="text-xs">What and How it work</span>
                                        </div>
                                    </a> -->
                                  
                                </div>
                            </div>
                        </div><!-- .row -->
                    </div><!-- .block @e -->
                </div>
            </section>
            <!-- // -->
          

           
            <!-- // -->
        </main>
        <?php include("includes/footer.php"); ?>
	</div>
	
	<div class="preloader"><span class="spinner spinner-round"></span></div>
	
	<!-- JavaScript -->
	<script src="assets/js/jquery.bundle.js?ver=1930"></script>
	<script src="assets/js/scripts.js?ver=1930"></script>
	<script src="assets/js/charts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        $(document).ready(function(){

$('.items').slick({
dots: true,
infinite: true,
speed: 800,
autoplay: true,
autoplaySpeed: 2000,
slidesToShow: 1,
slidesToScroll: 1,
responsive: [
{
breakpoint: 1024,
settings: {
slidesToShow: 1,
slidesToScroll: 1,
infinite: true,
dots: true
}
},
{
breakpoint: 600,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
},
{
breakpoint: 480,
settings: {
slidesToShow: 1,
slidesToScroll: 1
}
}

]
});
});
    </script>


</body>

</html>