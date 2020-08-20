<!doctype html>
<html class="no-js" lang="zxx">
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
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/jquery.exzoom.css">
    <script>
        function magnify(imgID, zoom) {
            var img, glass, w, h, bw;
            img = document.getElementById(imgID);
            /*create magnifier glass:*/
            glass = document.createElement("DIV");
            glass.setAttribute("class", "img-magnifier-glass");
            /*insert magnifier glass:*/
            img.parentElement.insertBefore(glass, img);
            /*set background properties for the magnifier glass:*/
            glass.style.backgroundImage = "url('" + img.src + "')";
            glass.style.backgroundRepeat = "no-repeat";
            glass.style.backgroundSize = (img.width * zoom) + "%     " + (img.height * zoom) + "%";
            bw = 3;
            w = glass.offsetWidth / 2;
            h = glass.offsetHeight / 2;
            /*execute a function when someone moves the magnifier glass over the image:*/
            glass.addEventListener("mousemove", moveMagnifier);
            img.addEventListener("mousemove", moveMagnifier);
            /*and also for touch screens:*/
            glass.addEventListener("touchmove", moveMagnifier);
            img.addEventListener("touchmove", moveMagnifier);
            function moveMagnifier(e) {
                var pos, x, y;
                /*prevent any other actions that may occur when moving over the image*/
                e.preventDefault();
                /*get the cursor's x and y positions:*/
                pos = getCursorPos(e);
                x = pos.x;
                y = pos.y;
                /*prevent the magnifier glass from being positioned outside the image:*/
                if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
                if (x < w / zoom) {x = w / zoom;}
                if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
                if (y < h / zoom) {y = h / zoom;}
                /*set the position of the magnifier glass:*/
                glass.style.left = (x - w) + "px";
                glass.style.top = (y - h) + "px";
                /*display what the magnifier glass "sees":*/
                glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
            }
            function getCursorPos(e) {
                var a, x = 0, y = 0;
                e = e || window.event;
                /*get the x and y positions of the image:*/
                a = img.getBoundingClientRect();
                /*calculate the cursor's x and y coordinates, relative to the image:*/
                x = e.pageX - a.left;
                y = e.pageY - a.top;
                /*consider any page scrolling:*/
                x = x - window.pageXOffset;
                y = y - window.pageYOffset;
                return {x : x, y : y};
            }
        }
    </script>
</head>
<body>
    <main>
    <section class="project-area  section-padding30">
            <div class="container" style="margin-right:20px;margin-left:20px;max-width:100%;">
                <div class="project-heading mb-35">
                    <div class="row align-items-end">
                        <div class="col-lg-6">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle3">
                                <div class="front-text">
                                    <h3 class="">Features</h3>
                                </div>
                                <span class="back-text">Gellary</span>
                            </div>
                        </div>
                        <div class="col-lg-6">                            
                        </div>
                    </div>
                </div>
                <div class="row" style="display: block;margin-right: 20px;">
                    <div class="col-12">
                        <!-- Nav Card -->
                        <div class="tab-content active" id="nav-tabContent">
                            <!-- card ONE -->
                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="project-caption">                                    
                                    <div class="col-lg-12 col-md-6">
                                        <div style="max-width:100%;border:1px solid grey;">
                                            <a href="<?php echo base_url('assets/'); ?>img/sub_products/gen_design-features.jpg"><img src="<?php echo base_url('assets/'); ?>img/sub_products/gen_design-features.jpg" alt="" style="width:-moz-available;"></a>
                                        </div>                                         
                                    </div>                                    
                                </div>
                            </div>                            
                        </div>
                        <!-- End Nav Card -->
                    </div>
                </div>
            </div>
        </section>
    </main>
  
  <!-- JS here -->


    <!-- All JS Custom Plugins Link Here here -->
    
    <script src="<?php echo base_url('assets/'); ?>js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/vendor/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // alert("Hello Frends chai peelo");            
            
            $("#exzoom").exzoom({
                // thumbnail nav options
                "navWidth": 60,
                "navHeight": 60,
                "navItemNum": 5,
                "navItemMargin": 7,
                "navBorder": 1,

                // autoplay
                "autoPlay": false,

                // autoplay interval in milliseconds
                // "autoPlayTimeout": 2000

                });
        });
        
    </script>
    <script src="<?php echo base_url('assets/'); ?>js/jquery.exzoom.js"></script>
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