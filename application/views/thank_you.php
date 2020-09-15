<!doctype html>
<html class="no-js" lang="zxx">
<?php
    if(isset($_GET['send']))
    {
        $sent = $_GET['send'];
    }
    else
    {
        redirect(base_url().'Err404');
    }    
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/'); ?>img/saturn_log.ico">

   <!-- CSS here -->
        <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/gijgo.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/slicknav.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/animate.min.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/fontawesome-all.min.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/themify-icons.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/themify-icons.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/slick.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/nice-select.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/style.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/responsive.css">
</head>

<body>
    <!-- Preloader Start -->
    <!-- slider Area Start-->
    <!-- <div class="slider-area ">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="<?php echo base_url('assets/'); ?>img/banner/contact_us.png" style="width:100%;background-size:cover;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap pt-100">
                            <h2>Contact</h2>
                            <nav aria-label="breadcrumb ">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url().'Home'?>">Home</a></li>                                
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- slider Area End-->
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="modal fade" id="modals">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="alert alert-success" style="margin-bottom:0px;">
                                    <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                                    <h5>Your Enquiry is Successfully sent to Saturn Valves!</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div> -->
                    <div class="col-lg-12">
                        <div class="jumbotron text-center">
                            <h1 class="display-3">Thank You!</h1>
                            <p class="lead"><strong>Our Sales Team will soon get back to you, Please check your email for further updates on your Enquiry.</strong></p>
                            <hr>
                            <p>
                                Having trouble? <a href="<?php echo base_url()?>Contact">Contact us</a>
                            </p>
                            <p class="lead">
                                <a class="btn btn-primary btn-sm" href="<?php echo base_url()?>Home" role="button">Continue to homepage</a>
                            </p>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Mistry Ind. Estate,I. B. Patel Road, Goregaon (East)</h3>
                                <p>,Mumbai- 400063</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>91-22-26859960 / 42523200</h3>
                                <p>Mon to Fri 9am to 5pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>sales@saturnvalves.com / info@saturnvalves.com</h3>
                                <p>Send us your Enqueries anytime!</p>
                            </div>
                        </div>                        
                    </div> -->
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
    <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="<?php echo base_url('assets/'); ?>js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		
        <script src="<?php echo base_url('assets/'); ?>js/vendor/jquery-1.12.4.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>
        <script type="text/javascript"> 
            $('#modals').modal('show');
            setTimeout(function() {
                $('#modals').modal('hide');
            }, 2500);
        </script>
        <script src="<?php echo base_url('assets/'); ?>js/popper.min.js"></script>
        
	    <!-- Jquery Mobile Menu -->
        <script src="<?php echo base_url('assets/'); ?>js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <!-- <script src="<?php //echo base_url('assets/'); ?>js/owl.carousel.min.js"></script> -->
        <script src="<?php echo base_url('assets/'); ?>js/slick.min.js"></script>
        <!-- Date Picker -->
        <!-- <script src="<?php //echo base_url('assets/'); ?>js/gijgo.min.js"></script> -->
		<!-- One Page, Animated-HeadLin -->
        <script src="<?php echo base_url('assets/'); ?>js/wow.min.js"></script>
		<script src="<?php echo base_url('assets/'); ?>js/animated.headline.js"></script>
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="<?php echo base_url('assets/'); ?>js/jquery.scrollUp.min.js"></script>
        <!-- <script src="<?php //echo base_url('assets/'); ?>js/jquery.nice-select.min.js"></script> -->
		<script src="<?php echo base_url('assets/'); ?>js/jquery.sticky.js"></script>
        <script src="<?php echo base_url('assets/'); ?>js/jquery.magnific-popup.js"></script>

        <!-- contact js -->
        <!-- <script src="<?php //echo base_url('assets/'); ?>js/contact.js"></script> -->
        <!-- <script src="<?php //echo base_url('assets/'); ?>js/jquery.form.js"></script> -->
        <!-- <script src="<?php //echo base_url('assets/'); ?>js/jquery.validate.min.js"></script> -->
        <!-- <script src="<?php //echo base_url('assets/'); ?>js/mail-script.js"></script> -->
        <!-- <script src="<?php //echo base_url('assets/'); ?>js/jquery.ajaxchimp.min.js"></script> -->
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="<?php echo base_url('assets/'); ?>js/plugins.js"></script>
        <script src="<?php echo base_url('assets/'); ?>js/main.js"></script>
        
    </body>
    
    </html>