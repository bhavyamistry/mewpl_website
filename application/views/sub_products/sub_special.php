<!doctype html>
<html class="no-js" lang="zxx">
<?php
    $product = $_GET['product'];
    $category = $_GET['category'];
    $product_name = '';
    if($category=='General_Purpose')
    {
        if($product=='1')
        {
            $product_name = 'Split Body, Full Bore, Side Entry Screwed End Ball Valve';
        }
        elseif($product=='2')
        {
            $product_name = 'Single Piece, Split Body, Regular Bore, Side Entry, Flange End Ball Valve';
        }
        elseif($product=='3')
        {
            $product_name = 'Two Piece, Split Body, Side Entry, Flange End Ball Valve';
        }
        elseif($product=='4')
        {
            $product_name = 'Three Piece, Split Body, Side Entry Ball Valve';
        }
    }
    // echo($product);
    echo("<script>console.log('Product:" . $product . ", Category:".$category."' );</script>");
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Saturn Valves</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/'); ?>img/saturn_log.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/slicknav.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/nice-select.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/style.css">
</head>
<body>
    <main>
    <section class="project-area  section-padding30">
            <div class="container">
                <div class="whole-wrap">
                    <div class="container box_1170">
                        <div class="section-top-border text-right">
                            <h3 class="mb-30"><?php echo $product_name?></h3>
                            <div class="row">
                                <div class="col-md-9">
                                    <p class="text-right">Over time, even the most sophisticated, memory packed computer can begin
                                        to run slow if we
                                        don’t do something to prevent it. The reason why has less to do with how computers are made
                                        and how they age and
                                        more to do with the way we use them. You see, all of the daily tasks that we do on our PC
                                        from running programs
                                        to downloading and deleting software can make our computer sluggish. To keep this from
                                        happening, you need to
                                        understand the reasons why your PC is getting slower and do something to keep your PC
                                        running at its best. You
                                        can do this through regular maintenance and PC performance optimization programs</p>
                                    <p class="text-right">Before we discuss all of the things that could be affecting your PC’s
                                        performance, let’s
                                        talk a little about what symptoms</p>
                                </div>
                                <div class="col-md-3">
                                    <img src="<?php echo base_url('assets/'); ?>img/elements/d.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
  <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="<?php echo base_url('assets/'); ?>js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?php echo base_url('assets/'); ?>js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/popper.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?php echo base_url('assets/'); ?>js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?php echo base_url('assets/'); ?>js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="<?php echo base_url('assets/'); ?>js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="<?php echo base_url('assets/'); ?>js/wow.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/animated.headline.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="<?php echo base_url('assets/'); ?>js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/jquery.sticky.js"></script>

    <!-- counter , waypoint -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/jquery.counterup.min.js"></script>

    <!-- contact js -->
    <script src="<?php echo base_url('assets/'); ?>js/contact.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/jquery.form.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/mail-script.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="<?php echo base_url('assets/'); ?>js/plugins.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/main.js"></script>

</body>

</html>