<!doctype html>
<html class="no-js" lang="zxx">
<?php
    $product = $_GET['product'];
    $product_det = '';
    $product_name = '';
    if($product=='1')
    {
        $product_name = 'Pneumatic Actuation Systems';
        $product_det = array("name"=>"Pneumatic Actuation Systems",
        "img"=>"img/sub_products/sub_at_1.1.jpg",
        "desc"=>"Pneumatic actuators are the most commonly used valve automation systems. They are economical and utilize compressed air readily available in most plants. They are ideal for quick opening and closing in both on-off and control applications.",        
        );
    }
    elseif($product=='2')
    {
        $product_name = 'Electric Actuation Systems';
        $product_det = array("name"=>"Electric Actuation Systems",
        "img"=>"img/sub_products/sub_et_1.1.jpg",
        "desc"=>"Electric actuators can deliver very high torques coupled with a gear box. They are compact, easy to maintain, and are widely used on large valves which require higher torques. Electric actuators are available in two versions.",        
        );
    }    // echo($product);
    echo("<script>console.log('Product:" . $product . "' );</script>");
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
            <div class="container">
                <div class="whole-wrap">
                    <div class="container box_1170">
                        <div class="section-top-border">
                            <h3 class="mt-30" style="padding-top:20px;padding-bottom:20px;"><?php echo $product_det['name'];?></h3>
                            <div class="row">                                
                                <div class="col-md-4">
                                    <div class="exzoom" id="exzoom">
                                        <!-- Images -->
                                        <div class="exzoom_img_box">
                                            <ul class='exzoom_img_ul'>
                                            <?php if($_GET['product']==1){?>
                                                <li><img src="<?php echo base_url('assets/').$product_det['img']; ?>"/></li>
                                                <li><img src="<?php echo base_url('assets/'); ?>img/sub_products/sub_at_1.2.jpg"/></li>
                                                <li><img src="<?php echo base_url('assets/'); ?>img/sub_products/sub_at_1.3.jpg ?>"/></li>
                                            <?php } else if($_GET['product']==2){?>
                                                <li><img src="<?php echo base_url('assets/').$product_det['img']; ?>"/></li>
                                                <li><img src="<?php echo base_url('assets/'); ?>img/sub_products/sub_et_1.2.jpg"/></li>                                                
                                            <?php }?>
                                        
                                            <!-- <li><img src="2.png"/></li>
                                            <li><img src="3.png"/></li>
                                            <li><img src="4.png"/></li>
                                            <li><img src="5.png"/></li> -->
                                            ...
                                            </ul>
                                        </div>
                                        <!-- <a href="https://www.jqueryscript.net/tags.php?/Thumbnail/">Thumbnail</a> Nav-->
                                        <div class="exzoom_nav"></div>
                                        <!-- Nav Buttons -->
                                        <p class="exzoom_btn">
                                            <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
                                            <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                                        </p>
                                    </div>
                                    <!-- <div class="img-magnifier-container">
                                        <img id="myimage" src="<?php //echo base_url('assets/').$product_det['img']; ?>" width="auto" height="50%" alt="<?php echo $product_det['name']; ?>">
                                    </div> -->
                                    <!-- <img src="<?php //echo base_url('assets/').$product_det['img']; ?>" alt="" class="img-fluid"> -->
                                </div>
                                <div class="col-md-8" style="height:45%">
                                    <blockquote class="generic-blockquote" style="text-align: initial;"><h5><?php echo $product_det['desc'];?><h5></blockquote>
                                    <!-- <div class="section-top-border"> -->
                                    <?php if($_GET['product']==1){?>
                                        <!-- <h3 class="mb-30">QUARTER TURN ROTARY ACTUATORS:</h3>
                                        <div class="row" style="text-align:left;padding:inherit;">                                        
                                            <div class="col-md-12 mt-sm-20">
                                                <p style="font-size:20px;">Quarter turn rotary actuators are coupled with ball, butterfly, and plug valves, etc.,all of which are quarter turn valves. They are available in two versions: single acting (spring return) and double acting. </p>
                                            </div>
                                            <div class="col-md-12 mt-sm-20">
                                                <p style="font-size:22px;">
                                                    <ul class="ordered-list" style="color: #212529;font-size:18px;">
                                                            <li style="color:inherit;">Rack and pinion design provides a linear torque characteristic at all travel positions.</li>
                                                            <li style="color:inherit;">Suitable for valves requiring constant torque.</li>
                                                            <li style="color:inherit;">Scotch yoke design provides high torque at the beginning and end of each operation.</li>
                                                            <li style="color:inherit;">Suitable for valves requiring high breakaway and seating torques.</li>
                                                    </ul>
                                                </p>
                                            </div>                                        
                                        </div> -->
                                    <?php } else if($_GET['product']==2){?>                                
                                        <div style="text-align:left;padding:10px;margin-top:20px;">
                                            <h4 class="mb-10">Accessories:</h4>
                                            <div class="row">                                        
                                                <div class="col-md-12 mt-sm-20">
                                                    <p style="font-size:22px;">
                                                        <ul class="ordered-list" style="color: #212529;font-size:20px;">
                                                            <li style="color:inherit;">Heaters and thermostats</li>
                                                            <li style="color:inherit;">Single or dual potentiometers</li>
                                                            <li style="color:inherit;">Servo controls</li>
                                                            <li style="color:inherit;">Motor brakes</li>
                                                            <li style="color:inherit;">Positioners</li>
                                                            <li style="color:inherit;">Transmitters</li>
                                                        </ul>
                                                    </p>
                                                </div>                                        
                                            </div>
                                        </div>
                                    <?php }?>                                   
                                <!-- </div>  -->
                            </div>
                            </div>
                        </div>                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:left;padding:inherit;">
                            <div class="section-top-border">
                                <?php if($_GET['product']==1){?>
                                    <h3 class="mb-30">QUARTER TURN ROTARY ACTUATORS:</h3>
                                    <div class="row">                                        
                                        <div class="col-md-12 mt-sm-20">
                                            <p style="font-size:22px;">Quarter turn rotary actuators are coupled with ball, butterfly, and plug valves, etc.,all of which are quarter turn valves. They are available in two versions: single acting (spring return) and double acting. </p>
                                        </div>
                                        <div class="col-md-12 mt-sm-20">
                                            <p style="font-size:22px;">
                                                <ul class="ordered-list" style="color: #212529;font-size:20px;">
                                                        <li style="color:inherit;">Rack and pinion design provides a linear torque characteristic at all travel positions.</li>
                                                        <li style="color:inherit;">Suitable for valves requiring constant torque.</li>
                                                        <li style="color:inherit;">Scotch yoke design provides high torque at the beginning and end of each operation.</li>
                                                        <li style="color:inherit;">Suitable for valves requiring high breakaway and seating torques.</li>
                                                </ul>
                                            </p>
                                        </div>                                        
                                    </div>
                                <?php } else if($_GET['product']==2){?>
                                    <h4 class="mb-10">Motors for quarter turn and linear actuators are available in the following electrical power supplies:</h4>
                                    <div class="row">                                        
                                        <div class="col-md-12 mt-sm-20">
                                            <p style="font-size:22px;">
                                                <ul class="ordered-list" style="color: #212529;font-size:20px;">
                                                        <li style="color:inherit;">Single phase 50 Hz AC: 110V, 220V, and 240V </li>
                                                        <li style="color:inherit;">Three phase 50 Hz AC: 220V, 240V, 380V, 400V, 415V, 440V, and 460V</li>
                                                        <li style="color:inherit;">Three phase 60 Hz AC: 208V, 220V, 230V, 240V, 380V, 440V, and 460V</li>
                                                        <li style="color:inherit;">DC: 24V, 48V, and 110V </li>
                                                </ul>
                                            </p>
                                        </div>                                        
                                    </div>
                                <?php }?>   
                                
                            </div>                            
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
  <!-- JS here -->
  <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/vendor/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
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
    <script>
        /* Initiate Magnify Function
        with the id of the image, and the strength of the magnifier glass:*/
        // magnify("myimage", 2);
    </script>

    <!-- All JS Custom Plugins Link Here here -->
    <script src="<?php echo base_url('assets/'); ?>js/jquery.exzoom.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
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