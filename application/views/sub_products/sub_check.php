<!doctype html>
<html class="no-js" lang="zxx">
<?php
    $product = $_GET['product'];

    $product_det = '';
    $product_name = '';
    if($product=='1')
    {
        $product_name = 'Gate Valve: Bolted Bonnet, Rising Stem, Flanged Carbon, Alloy and Stainless Steel';        
        $product_det = array("name"=>"Gate Valve: Bolted Bonnet, Rising Stem, Flanged Carbon, Alloy and Stainless Steel",
        "img"=>"img/sub_products/sub_chk_1.jpg",    
        );
    }
    else if($product=='2')
    {
        $product_name = 'Globe Valve: Bolted Bonnet, Rising Stem, Flanged Carbon, Alloy and Stainless Steel';
        $product_det = array("name"=>"Globe Valve: Bolted Bonnet, Rising Stem, Flanged Carbon, Alloy and Stainless Steel",
        "img"=>"img/sub_products/sub_chk_2.jpg"        
        );
    }
    else if($product=='3')
    {
        $product_name = 'Extended Stem Ball Valve';
        $product_det = array("name"=>"Extended Stem Ball Valve",
        "img"=>"img/sub_products/sub_chk_3.jpg"       
        );
    }
    else if($product=='4')
    {
        $product_name = 'Wafer Design Spring Loaded Check Valve: Carbon, Alloy and Stainless Steel (150 LBS 300 LBS)';
        $product_det = array("name"=>"Wafer Design Spring Loaded Check Valve: Carbon, Alloy and Stainless Steel (150 LBS 300 LBS)",
        "img"=>"img/sub_products/sub_chk_4.jpg"
        );
    }
    else if($product=='5')
    {
        $product_name = 'Wafer Design Swing Check Valve: Carbon, Alloy and Stainless Steel (PN 10 PN 16)';
        $product_det = array("name"=>"Wafer Design Swing Check Valve: Carbon, Alloy and Stainless Steel (PN 10 PN 16)",
        "img"=>"img/sub_products/sub_chk_5.jpg"
        );
    }
    else if($product=='6') {
        $product_name = 'Forged: Gate valve';
        $product_det = array("name"=>"Forged: Gate valve",
        "img"=>"img/sub_products/sub_chk_6.jpg"
        );
    }
    else if($product=='7') {
        $product_name = 'Forged: Globe Valve';
        $product_det = array("name"=>"Forged: Globe Valve",
        "img"=>"img/sub_products/sub_chk_7.jpg"
        );
    }
    else if($product=='8') {
        $product_name = 'Forged: Lift Check Valve';
        $product_det = array("name"=>"Forged: Lift Check Valve",
        "img"=>"img/sub_products/sub_chk_8.jpg"
        );
    }
    else{
        redirect(base_url().'Err404');
    }    
    // echo($product);
    // echo("<script>console.log('Product:" . $product . "' );</script>");
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
                                            <li><img src="<?php echo base_url('assets/').$product_det['img']; ?>"/></li>                                            
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
                                <div class="col-md-8">
                                <?php if($product==6) {?>  
                                    <div style="padding:20px;">
                                        <blockquote class="generic-blockquote" style="text-align: initial;">
                                            <h5>Gate valves are designed to operate in a fully open or fully closed position. When open, the media will flow with minimal turbulence and pressure drop through the valve. Gate valves are available with a variety of body and trim materials, stem packing and end connections. The rugged construction of
forged gate valves provide an extended life of safe operation. Metal-to-metal seating surfaces accommodate the widest range of pressure-temperature conditions.<h5>
                                        </blockquote>
                                    </div>
                                <?php } else if($product==7){?>
                                    <div style="padding:20px;">
                                        <blockquote class="generic-blockquote" style="text-align: initial;">
                                            <h5>Globe Valves are suitable for throttling as well as shutoff. They are installed such a way that the media pressure and preferred flow direction are under the disc (as illustrated).<h5>
                                        </blockquote>
                                    </div>
                                <?php }else if($product==8){?>
                                    <div style="padding:20px;">
                                        <blockquote class="generic-blockquote" style="text-align: initial;">
                                            <h5>Check valves are Spring-controlled designed for horizontal or vertical (upward) flow applications. Check valves are designed to prevent reverse flow. leakage rate for check valves with metal-to-metal seats are dependent on the amount of bock pressure and the viscosity of the flowing medium. The recommended pressure differential should be 300 to 500 psi minimum for proper seating of the disc. Metal-seated check valves should not be used in gas or low back pressure liquid applications or it zero leakage is desired. Please ask for optional Soft seated plug for such services<h5>
                                        </blockquote>
                                    </div>
                                <?php }?>
                                    
                                    <div class="progress-table-wrap">
                                        <div class="progress-table" style="padding-top:5px;background;#D6E3F4;">                                        
                                            <div class="table-head">                                                      
                                                <?php if($product==6 || $product==7 || $product==8) {?>                                        
                                                        <div class="col-lg-3 col-md-5 col-sm-5 col-xs-5 serial" style="padding-left:0px;">Size</div>                                                        
                                                        <div class=" col-lg-2 col-md-5 col-sm-5 col-xs-5 visit">Class</div>
                                                        <div class=" col-lg-3 col-md-5 col-sm-5 col-xs-5 visit">Ends</div>
                                                        <div class="col-lg-4 col-md-5 col-sm-5 col-xs-5 percentage">Model No.</div>                                                                                
                                                <?php }else{?>
                                                        <div class="col-lg-4 col-md-5 col-sm-5 col-xs-5 serial" style="padding-left:0px;">Size</div>                                                        
                                                        <div class=" col-lg-3 col-md-5 col-sm-5 col-xs-5 visit">Class</div>
                                                        <div class="col-lg-4 col-md-5 col-sm-5 col-xs-5 percentage">Model No.</div>                                                                                
                                                <?php }?>
                                            </div>
                                            <?php if($product==1){?>            
                                                <div class="table-row">
                                                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-5 table-contents" style="text-align:center">DN 40-600 (11/2″-24″)</div>
                                                    <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">150</div>                                            
                                                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">GT-1-F-F-A1</div>                                                                                                                                   
                                                </div>
                                                <div class="table-row">
                                                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-5 table-contents" style="text-align:center">DN 40-300 (11/2″-12″)</div>
                                                    <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">300</div>                                            
                                                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">GT-1-F-F-A2</div>                                                                                                                                   
                                                </div>
                                                <div class="table-row">
                                                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-5 table-contents" style="text-align:center">DN 50-200 (2″-8″)</div>
                                                    <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">600</div>                                            
                                                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">GT-1-F-F-A3</div>                                                                                                                                   
                                                </div>                                             
                                            <?php }else if($product==2){?>
                                                <div class="table-row">
                                                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-5 table-contents" style="text-align:center">DN 40-300 (11/2″-24″)</div>
                                                    <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">150</div>                                            
                                                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">GB-1-S-F-A1</div>                                                                                                                                   
                                                </div>
                                                <div class="table-row">
                                                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-5 table-contents" style="text-align:center">DN 40-300 (11/2″-12″)</div>
                                                    <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">300</div>                                            
                                                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">GB-1-S-F-A1</div>                                                                                                                                   
                                                </div>
                                                <div class="table-row">
                                                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-5 table-contents" style="text-align:center">DN 50-200 (2″-8″)</div>
                                                    <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">600</div>                                            
                                                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">GB-1-S-F-A1</div>                                                                                                                                   
                                                </div>                                   
                                            <?php }else if($product==3){?>
                                                <div class="table-row">
                                                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-5 table-contents" style="text-align:center">DN 40-400 (11/2″-16″)</div>
                                                    <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">150</div>                                            
                                                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">CH-2-S-F-A1</div>                                                                                                                                   
                                                </div>
                                                <div class="table-row">
                                                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-5 table-contents" style="text-align:center">DN 40-200 (11/2″-8″)</div>
                                                    <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">300</div>                                            
                                                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">CH-2-S-F-A2</div>                                                                                                                                   
                                                </div>
                                                <div class="table-row">
                                                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-5 table-contents" style="text-align:center">DN 50-200 (11/2″-8″)</div>
                                                    <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">600</div>                                            
                                                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">CH-2-S-F-A3</div>                                                                                                                                   
                                                </div>                                             
                                            <?php }else if($product==4){?>     
                                                <div class="table-row">
                                                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-5 table-contents" style="text-align:center">DN 40-300 (11/2″-24″)</div>
                                                    <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">150</div>                                            
                                                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">GB-1-S-F-A1</div>                                                                                                                                   
                                                </div>
                                                <div class="table-row">
                                                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-5 table-contents" style="text-align:center">DN 40-300 (11/2″-12″)</div>
                                                    <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">300</div>                                            
                                                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">GB-1-S-F-A1</div>                                                                                                                                   
                                                </div>
                                                <div class="table-row">
                                                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-5 table-contents" style="text-align:center">DN 50-200 (2″-8″)</div>
                                                    <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">600</div>                                            
                                                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">GB-1-S-F-A1</div>                                                                                                                                   
                                                </div>                                            
                                            <?php }else if($product==5){?>
                                                <div class="table-row">
                                                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-5 table-contents" style="text-align:center">DN 40-300 (11/2″-24″)</div>
                                                    <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">150</div>                                            
                                                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">GB-1-S-F-A1</div>                                                                                                                                   
                                                </div>
                                                <div class="table-row">
                                                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-5 table-contents" style="text-align:center">DN 40-300 (11/2″-12″)</div>
                                                    <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">300</div>                                            
                                                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">GB-1-S-F-A1</div>                                                                                                                                   
                                                </div>
                                                <div class="table-row">
                                                    <div class="col-lg-4 col-md-5 col-sm-5 col-xs-5 table-contents" style="text-align:center">DN 50-200 (2″-8″)</div>
                                                    <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">600</div>                                            
                                                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">GB-1-S-F-A1</div>                                                                                                                                   
                                                </div>
                                            <?php } else if($product=='6' || $product=='7' || $product=='8'){?>
                                                <div class="table-row">
                                                    <div class="col-lg-3 col-md-5 col-sm-5 col-xs-5 table-contents" style="text-align:center">8-50 mm 1/4″ to 2″</div>
                                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">800</div>
                                                    <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">
                                                        <div class="short-div">Threaded to BSP ‘II’</div>
                                                        <div class="short-div" >Threaded to NPT</div>
                                                        <div class="short-div" >Socketweld</div>
                                                        <div class="short-div" >Buttweld</div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">
                                                        <?php if($product=='6'){?>
                                                            <div class="short-div">GT-1-R-P-A4</div>
                                                            <div class="short-div" >GT-1-R-N-A4</div>
                                                            <div class="short-div" >GT-1-R-W-A4</div>
                                                            <div class="short-div" >GT-1-R-B-A4</div>
                                                        <?php } else if($product=='7'){?>
                                                            <div class="short-div">GB-1-R-P-A4</div>
                                                            <div class="short-div" >GB-1-R-N-A4</div>
                                                            <div class="short-div" >GB-1-R-W-A4</div>
                                                            <div class="short-div" >GB-1-R-B-A4</div>
                                                        <?php } else {?>
                                                            <div class="short-div">CH-1-R-P-A4</div>
                                                            <div class="short-div" >CH-1-R-N-A4</div>
                                                            <div class="short-div" >CH-1-R-W-A4</div>
                                                            <div class="short-div" >CH-1-R-B-A4</div>
                                                        <?php }?>
                                                    </div>                                                    
                                                </div>
                                                <div class="table-row">
                                                    <div class="col-lg-3 col-md-5 col-sm-5 col-xs-5 table-contents" style="text-align:center">20-40 mm 3/4″ to 1/2″</div>
                                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">1500</div>
                                                    <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">
                                                        <div class="short-div">Threaded to BSP ‘II’</div>
                                                        <div class="short-div" >Threaded to NPT</div>
                                                        <div class="short-div" >Socketweld</div>
                                                        <div class="short-div" >Buttweld</div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">                                                        
                                                        <?php if($product=='6'){?>
                                                            <div class="short-div">GT-1-R-P-A6</div>
                                                            <div class="short-div" >GT-1-R-N-A6</div>
                                                            <div class="short-div" >GT-1-R-W-A6</div>
                                                            <div class="short-div" >GT-1-R-B-A6</div>
                                                        <?php } else if($product=='7'){?>
                                                            <div class="short-div">GB-1-R-P-A6</div>
                                                            <div class="short-div" >GB-1-R-N-A6</div>
                                                            <div class="short-div" >GB-1-R-W-A6</div>
                                                            <div class="short-div" >GB-1-R-B-A6</div>
                                                        <?php } else {?>
                                                            <div class="short-div">CH-1-R-P-A6</div>
                                                            <div class="short-div" >CH-1-R-N-A6</div>
                                                            <div class="short-div" >CH-1-R-W-A6</div>
                                                            <div class="short-div" >CH-1-R-B-A6</div>
                                                        <?php }?>
                                                    </div>                                                    
                                                </div>
                                                <div class="table-row">
                                                    <div class="col-lg-3 col-md-5 col-sm-5 col-xs-5 table-contents" style="text-align:center">15-50 mm 1/2″ to 2″</div>
                                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">
                                                        <div class="short-div" >150</div>
                                                        <div class="short-div" >300</div>
                                                        <div class="short-div" >600</div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">                                                        
                                                        <div class="short-div" ></div>
                                                        <div class="short-div" >Welded Flange,</div>
                                                        <div class="short-div" >Raised face</div>                                                        
                                                    </div>
                                                    <div class="col-lg-4 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">                             
                                                        
                                                        <?php if($product=='6'){?>
                                                            <div class="short-div" >GT-1-R-F-A1</div>
                                                            <div class="short-div" >GT-1-R-F-A2</div>
                                                            <div class="short-div" >GT-1-R-F-A3</div>
                                                        <?php } else if($product=='7'){?>
                                                            <div class="short-div" >GB-1-R-F-A1</div>
                                                            <div class="short-div" >GB-1-R-F-A2</div>
                                                            <div class="short-div" >GB-1-R-F-A3</div>
                                                        <?php } else {?>
                                                            <div class="short-div" >CH-1-R-F-A1</div>
                                                            <div class="short-div" >CH-1-R-F-A2</div>
                                                            <div class="short-div" >CH-1-R-F-A3</div>
                                                        <?php }?>
                                                    </div>                                                    
                                                </div>                                                
                                            <?php }?>
                                                                                               
                                        </div>
                                        
                                    </div>
                                    <div class="mt-30">
                                        <button href="#" class="btn" data-toggle="modal" data-target="#popUpWindow">Enquire</button>
                                    </div>
                                    <div class="modal fade" id="popUpWindow">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- header -->
                                                <div class="modal-header" style="width: 100%;">
                                                    <h3 class="modal-title" style="width: 95%;">Enquiry Form</h3>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <!-- body -->
                                                <div class="modal-header">
                                                    <form role="form" style="width:100%;" action="<?php echo base_url()?>Enquiry/sendSingleEnquiry" id="myform" method="POST">
                                                        <div class="form-group">
                                                            <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control valid" name="bname" id="bname" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Company name'" placeholder="Enter your Company name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control valid" name="num" id="num" type="text" oninput="numberOnly(this.id);" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your phone number'" placeholder="Enter your phone number" maxlength="10" minlength="10" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="checkEmail();" value="" placeholder="Email" required><span id="error"></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea class="form-control w-100" name="message" id="message" cols="30" rows="3" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Requirements'" placeholder=" Enter Requirements"></textarea>
                                                        </div>
                                                        <div  id="wait" class="preloader-wrapper big active" style="display:none;width:30%;height:30%;position:absolute;top:50%;left:50%;padding:2px;">
                                                            <img src="<?php echo base_url('assets')?>/img/logo/Loading.gif" width="100%" height="100%" /><br>
                                                            <h5 class="mt-10">Validating........<h5>    
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="submit" class="btn btn-block" value='Submit'>
                                                            <input type="hidden" name="product" id = "product" value="">
                                                            <input type="hidden" name="sub_pro" id="sub_pro" value="">
                                                        </div>
                                                        
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                 
                                    
                                </div>
                                

                            </div>
                            
                        </div>                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="section-top-border" style="margin-top:25px;">
                                <!-- <h3 class="mb-30">Table</h3> -->
                                <div class="progress-table-wrap">
                                    <div class="progress-table">                                    
                                        <div class="table-head" style="padding-bottom:10px;">
                                        <?php if($_GET['product']==1){?>                                                     
                                            <span href="#" class="genric-btn primary radius" style="margin-left:5px;" id="design" onclick="myfunc()">Design Feature & Options</span>
                                            <span href="#" class="genric-btn primary radius"  id="standard">Standard Compliance</span>
                                            <span href="#" class="genric-btn primary radius"  id="service">Tests & Certificates</span>                                            
                                            <span href="#" class="genric-btn primary radius"  id="catalog">Download E-Catalog</span>                                                                                
                                        <?php } else if($_GET['product']==2){?>                                             
                                            <span href="#" class="genric-btn primary radius" style="margin-left:5px;" id="design" onclick="myfunc()">Design Feature</span>                                            
                                            <span href="#" class="genric-btn primary radius"  id="standard">Standard Compliance</span>
                                            <span href="#" class="genric-btn primary radius"  id="service">Tests & Certificates</span>                                            
                                            <span href="#" class="genric-btn primary radius"  id="catalog">Download E-Catalog</span>                                                                                  
                                        <?php } else if($_GET['product']==3){?>                                             
                                            <span href="#" class="genric-btn primary radius" style="margin-left:5px;" id="design" onclick="myfunc()">Design Feature</span>
                                            <span href="#" class="genric-btn primary radius"  id="standard">Standard Compliance</span>
                                            <span href="#" class="genric-btn primary radius"  id="service">Tests & Certificates</span>                                            
                                            <span href="#" class="genric-btn primary radius"  id="catalog">Download E-Catalog</span>                                                                                
                                        <?php } else if($_GET['product']==4){?>                                             
                                            <span href="#" class="genric-btn primary radius" style="margin-left:5px;" id="design" onclick="myfunc()">Design Feature</span>
                                            <span href="#" class="genric-btn primary radius"  id="service">Service Application</span>
                                            <span href="#" class="genric-btn primary radius"  id="standard">Standard Compliance</span>
                                            <span href="#" class="genric-btn primary radius"  id="test">Tests & Certificates</span>                                            
                                            <span href="#" class="genric-btn primary radius"  id="catalog">Download E-Catalog</span>                                                                                
                                        <?php } else if($_GET['product']==5){?>                                             
                                            <span href="#" class="genric-btn primary radius" style="margin-left:5px;" id="design" onclick="myfunc()">Design Feature</span>
                                            <span href="#" class="genric-btn primary radius"  id="service">Service Application</span>
                                            <span href="#" class="genric-btn primary radius"  id="standard">Standard Compliance</span>
                                            <span href="#" class="genric-btn primary radius"  id="test">Tests & Certificates</span>                                            
                                            <span href="#" class="genric-btn primary radius"  id="catalog">Download E-Catalog</span> 
                                        <?php } else if($_GET['product']=='6' || $_GET['product']=='7' || $_GET['product']=='8'){?>                                             
                                            <span href="#" class="genric-btn primary radius" style="margin-left:5px;" id="design" onclick="myfunc()">Design Feature</span>                                            
                                            <span href="#" class="genric-btn primary radius"  id="standard">Standard Compliance</span>
                                            <span href="#" class="genric-btn primary radius"  id="service">Tests & Certificates</span>                                            
                                            <span href="#" class="genric-btn primary radius"  id="catalog">Download E-Catalog</span>                                                                                                                        
                                        <?php }?>
                                        </div>
                                    <?php if($_GET['product']==1){?>                                             
                                        <div class="table-row">
                                            <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="text-align:left;margin-left:15px;">                                                                                        
                                                <div style="text-align:left;margin-left:15px;" id="design_div1" class="content">
                                                    <ul class="unordered-list">                                                    
                                                        <li>The Stem nut design allows for The removal of the hand-wheel  while keeping The Stem and gate in fixed position</li>
                                                        <li>Anti-frictional bearings are provided in higher sizes & classes for smoother operation</li>
                                                        <li>All The valves provided with backseat arrangement</li>
                                                        <li>Bi-directional shut-off</li>
                                                        <li>Body ports are streamlined, permitting unobstructed flow, reduced turbulense, result in loew presure drop and lower erosion</li>
                                                        <li>Solid Wedge upto DN 65 & Flexible for above sizes</li>
                                                        <li>Renewable Press fit type for Seat CS & Integral for SS</li>
                                                        <li>Full bore assures NO PRESSURE DROP across the valve</li>
                                                        <li>Two Piece gland functions as the back seat for assured stem sealing at all pressures</li>
                                                        <li> It also helps user to replace on-line stem seals</li>
                                                    <br>                                                                        
                                                    <h5>OPTIONS:</h5>                                                    
                                                    <br>
                                                    <ul class="unordered-list">                                                   
                                                        <li> Bonnet Extension are provided for Low temperature/Cryogenic services.</li>
                                                        <li>Locking devise helps to prevent accident in plant / theft of material/assured open/close condition etc.</li>                                                                            
                                                    </ul>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:10px;" id="service_div1" class="content">
                                                    <ul class="unordered-list">                                                   
                                                        <li>Pressure testing API 598 & BS EN 12266-1</li>
                                                        <li>Other ISO 9001:2008</li>                                                                            
                                                    </ul>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="standard_div1" class="content">                                        
                                                    <ul class="unordered-list">                                                   
                                                        <li>Valve Design API 600, API 603 & ISO 10434 ASME B16.34 BS 1414.</li>
                                                        <li>End to End ASME B16.10 & ISO 5752.</li>
                                                        <li>Flanged Dimensions ASME B16.5 & ISO 7005-1 Part. 1.</li>
                                                        <li>Buttweld Dimensions ASME B16.25.</li>
                                                        <li>Visual Inspection MSS SP- 55</li>
                                                        <li>Marking MSS SP-25 & ISO 5209</li>                                                                            
                                                    </ul>
                                                </div>
                                                <div style="text-align:center;margin-left:15px;word-spacing:10px;" id="catalog_div1" class="content">
                                                    <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="display:inline-block;">
                                                        <a href="<?php echo base_url('assets/').'product_pdf/Gate_Valve.pdf';?>" style="display:inherit;">
                                                            <div class="single-gallery-image" style="background: url(<?php echo base_url('assets/')?>/img/pdf_img/chk_1.jpg);width:250px;height:250px;displat:block;"></div>
                                                        </a>
                                                        <h6>For Detailed Dimension, Please Download E-Catalog</h6>
                                                    </div>                                                    
                                                </div>
                                            </div>                                        
                                        </div>
                                    <?php } else if($_GET['product']==2) {?>
                                        <div class="table-row">
                                            <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="text-align:left;margin-left:15px;">                                                                                        
                                                <div style="text-align:left;margin-left:15px;" id="design_div2" class="content">
                                                    <ul class="unordered-list">                                                   
                                                        <li>Suitable for throttling as well as shutoff.</li>
                                                        <li>The Stem nut design allows for the removal of the hand-wheel while keeping the Stem and plug in fixed position.</li>
                                                        <li>All The valves provided with backseat arrangement.</li>
                                                        <li>Two Piece gland functions as the back seat for assured stem
                                                        sealing at all pressures. It also helps user to replace on-line stem seals.</li>                                                      
                                                    </ul>                                                                                                                                        
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:10px;" id="service_div2" class="content">
                                                    <ul class="unordered-list">                                                   
                                                        <li>Pressure testing API 598 & BS EN 12266-1</li>
                                                        <li>Other ISO 9001:2008</li>                                                                            
                                                    </ul>
                                                </div>                                              
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="standard_div2" class="content">                                        
                                                    <ul class="unordered-list">                                                   
                                                        <li>Valve Design BS1873, ASME B 16.34.</li>
                                                        <li>End to End ASME B16.10 & ISO 5752.</li>
                                                        <li>Flanged Dimensions ASME B16.5 & ISO 7005-1 Part. 1.</li>
                                                        <li>Buttweld Dimensions ASME B16.25.</li>
                                                        <li>Visual Inspection MSS SP- 55.</li>
                                                        <li>Marking MSS SP-25 & ISO 5209.</li>
                                                    </ul>                                                                                                                          
                                                </div>                                                
                                                <div style="text-align:center;margin-left:15px;word-spacing:10px;" id="catalog_div2" class="content">
                                                    <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="display:inline-block;">
                                                        <a href="<?php echo base_url('assets/').'product_pdf/Globe_Valve.pdf';?>" style="display:inherit;">
                                                            <div class="single-gallery-image" style="background: url(<?php echo base_url('assets/')?>/img/pdf_img/chk_2.jpg);width:250px;height:250px;displat:block;"></div>
                                                        </a>
                                                        <h6>For Detailed Dimension, Please Download E-Catalog</h6>
                                                    </div>                                                    
                                                </div>
                                            </div>                                        
                                        </div>
                                    <?php } else if($_GET['product']==3) {?>
                                        <div class="table-row">
                                            <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="text-align:left;margin-left:15px;">                                                                                        
                                                <div style="text-align:left;margin-left:15px;" id="design_div3" class="content">
                                                    <ul class="unordered-list">                                                   
                                                        <li>Low Cost.</li>
                                                        <li>Low pressure drop.</li>
                                                        <li>Light weight / sturdy.</li>
                                                        <li>Mount in any direction.</li>
                                                        <li>Rapid open / close action.</li>
                                                        <li>Space Req 6% of conventional valve.</li> 
                                                    </ul>                                                                                                                                        
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:10px;" id="service_div3" class="content">
                                                    <ul class="unordered-list">                                                   
                                                        <li>Pressure testing API 598 & BS EN 12266-1.</li>
                                                        <li>Other ISO 9001:2008.</li>                                                                            
                                                    </ul>
                                                </div>                                              
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="standard_div3" class="content">                                        
                                                    <ul class="unordered-list">                                                   
                                                        <li>Valve Design BS1868, ASME B 16.34.</li>
                                                        <li>End to End ASME B16.10 & ISO 5752.</li>
                                                        <li>Flanged Dimensions ASME B16.5 & ISO 7005-1 Part. 1.</li>
                                                        <li>Buttweld Dimensions ASME B16.25.</li>
                                                        <li>Visual Inspection MSS SP- 55.</li>
                                                        <li>Marking MSS SP-25 & ISO 5209.</li>
                                                    </ul>                                                                                                                          
                                                </div>                                                
                                                <div style="text-align:center;margin-left:15px;word-spacing:10px;" id="catalog_div3" class="content">
                                                    <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="display:inline-block;">
                                                        <a href="<?php echo base_url('assets/').'product_pdf/Swing_Check_Valve.pdf';?>" style="display:inherit;">
                                                            <div class="single-gallery-image" style="background: url(<?php echo base_url('assets/')?>/img/pdf_img/chk_3.jpg);width:250px;height:250px;displat:block;"></div>
                                                        </a>
                                                        <h6>For Detailed Dimension, Please Download E-Catalog</h6>
                                                    </div>                                                    
                                                </div>
                                            </div>                                        
                                        </div>
                                    <?php } else if($_GET['product']==4) {?>
                                        <div class="table-row">
                                            <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="text-align:left;margin-left:15px;">                                                                                        
                                                <div style="text-align:left;margin-left:15px;" id="design_div4" class="content">
                                                    <ul class="unordered-list">                                                   
                                                        <li>Suitable for throttling as well as shutoff.</li>
                                                        <li>The Stem nut design allows for the removal of the hand-wheel while keeping the Stem and plug in fixed position.</li>
                                                        <li>All The valves provided with back-seat arrangement.</li>
                                                        <li>Two Piece gland functions as the back seat for assured stem sealing at all pressures.</li>
                                                        <li>It also helps user to replace on-line stem seals.</li> 
                                                    </ul>                                                                                                                                        
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="service_div4" class="content">
                                                    <ul class="unordered-list">                                                   
                                                        <li>In filtration & ion-exchange process.</li>
                                                        <li>In nitrogen & other gas generating plants.</li>
                                                        <li>In down stream of pumps & equipment’s.</li>
                                                        <li>In vessels as foot valves & vacuum breaker valves.</li>
                                                        <li>In refrigeration plans & air conditioning systems.</li>
                                                    </ul>
                                                </div> 
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="test_div4" class="content">
                                                    <ul class="unordered-list">                                                   
                                                        <li>Pressure testing API 598 & BS EN 12266-1</li>
                                                        <li>Other ISO 9001:2008</li>
                                                    </ul>
                                                </div>                                              
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="standard_div4" class="content">                                        
                                                    <ul class="unordered-list">                                                   
                                                        <li>Design : API 594.</li>
                                                        <li>Pressure Test : API 598.</li>
                                                        <li>End Connection : Wafer type Suitable to Mount between BS 10/150/DIN Flanges.</li>
                                                    </ul>                                                                                                                          
                                                </div>                                                
                                                <div style="text-align:center;margin-left:15px;word-spacing:5px;" id="catalog_div4" class="content">
                                                    <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="display:inline-block;">
                                                        <a href="<?php echo base_url('assets/').'product_pdf/Wafer_Check_Valve.pdf';?>" style="display:inherit;">
                                                            <div class="single-gallery-image" style="background: url(<?php echo base_url('assets/')?>/img/pdf_img/chk_4.jpg);width:250px;height:250px;displat:block;"></div>
                                                        </a>
                                                        <h6>For Detailed Dimension, Please Download E-Catalog</h6>
                                                    </div>                                                    
                                                </div>
                                            </div>                                        
                                        </div>
                                    <?php } else if($_GET['product']==5) {?>                                    
                                        <div class="table-row">
                                            <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="text-align:left;margin-left:15px;">                                                                                        
                                                <div style="text-align:left;margin-left:15px;" id="design_div5" class="content">
                                                    <ul class="unordered-list">                                                   
                                                        <li>Low Cost.</li>
                                                        <li>Low pressure drop.</li>
                                                        <li>Light weight / sturdy.</li>
                                                        <li>Mount in any direction.</li>
                                                        <li>Rapid open / close action.</li>
                                                        <li>Space Req 6% of conventional valve.</li> 
                                                    </ul>                                                                                                                                        
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="service_div5" class="content">
                                                    <ul class="unordered-list">                                                   
                                                        <li>In filtration & ion-exchange process.</li>
                                                        <li>In nitrogen & other gas generating plants.</li>
                                                        <li>In down stream of pumps & equipment’s.</li>
                                                        <li>In vessels as foot valves & vacuum breaker valves.</li>
                                                        <li>In refrigeration plans & air conditioning systems.</li>
                                                    </ul>
                                                </div> 
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="test_div5" class="content">
                                                    <ul class="unordered-list">                                                   
                                                        <li>Pressure testing API 598 & BS EN 12266-1</li>
                                                        <li>Other ISO 9001:2008</li>
                                                    </ul>
                                                </div>                                              
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="standard_div5" class="content">                                        
                                                    <ul class="unordered-list">                                                   
                                                        <li>Design : API 594.</li>
                                                        <li>Pressure Test : API 598.</li>
                                                        <li>End Connection : Wafer type Suitable to Mount between BS 10/150/DIN Flanges.</li>
                                                    </ul>                                                                                                                          
                                                </div>                                                
                                                <div style="text-align:center;margin-left:15px;word-spacing:5px;" id="catalog_div5" class="content">
                                                    <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="display:inline-block;">
                                                        <a href="<?php echo base_url('assets/').'product_pdf/Wafer_Check_Valve.pdf';?>" style="display:inherit;">
                                                            <div class="single-gallery-image" style="background: url(<?php echo base_url('assets/')?>/img/pdf_img/chk_5.jpg);width:250px;height:250px;displat:block;"></div>
                                                        </a>
                                                        <h6>For Detailed Dimension, Please Download E-Catalog</h6>
                                                    </div>                                                    
                                                </div>
                                            </div>                                        
                                        </div>
                                    <?php } else if($_GET['product']=='6') {?>
                                        <div class="table-row">
                                            <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="text-align:left;margin-left:15px;">                                                                                        
                                                <div style="text-align:left;margin-left:15px;" id="design_div6" class="content">
                                                    <ul class="unordered-list">                                                    
                                                        <li>Reduced or Full Port.</li>
                                                        <li>Compact Outside Screw & yoke.</li>
                                                        <li>Spiral Wound Gasket of Stainless Steel.</li>
                                                        <li>Bolted bonnet.</li>
                                                        <li>Replaceable or Integral Hard faced Seat.</li>                                                    
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:10px;" id="service_div6" class="content">
                                                    <ul class="unordered-list">                                                   
                                                        <li>Pressure testing API 598.</li>
                                                        <li>Other ISO 9001:2008.</li>                                                                            
                                                    </ul>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="standard_div6" class="content">                                        
                                                    <ul class="unordered-list">                                                   
                                                        <li>Valve Design API 602- EN ISO 15761 & ASME B 16.34.</li>
                                                        <li>End to End ASME B16.10 for flanged valves & MEWPL Sid. for threaded / socket & Buttweld ends.</li>
                                                        <li>Threaded as per BSP II – IS 554 & NPT as per ANSI 8 1.20.1.</li>
                                                        <li>Socket weld as per ANSI B 16.11</li>
                                                        <li>Buttweld Dimersions ASME B16.25.</li>
                                                        <li>Flanged Dimensions ASME B 16.5 & ISO 7005-1 Part.</li>
                                                    </ul>
                                                </div>
                                                <div style="text-align:center;margin-left:15px;word-spacing:10px;" id="catalog_div6" class="content">
                                                    <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="display:inline-block;">
                                                        <a href="<?php echo base_url('assets/').'product_pdf/Forged_Gate_Valve.pdf';?>" style="display:inherit;">
                                                            <div class="single-gallery-image" style="background: url(<?php echo base_url('assets/')?>/img/pdf_img/chk_6.jpg);width:250px;height:250px;displat:block;"></div>
                                                        </a>
                                                        <h6>For Detailed Dimension, Please Download E-Catalog</h6>
                                                    </div>                                                    
                                                </div>
                                            </div>                                        
                                        </div>
                                    <?php }else if($_GET['product']=='7') {?>
                                        <div class="table-row">
                                            <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="text-align:left;margin-left:15px;">                                                                                        
                                                <div style="text-align:left;margin-left:15px;" id="design_div7" class="content">
                                                    <ul class="unordered-list">                                                    
                                                        <li>Reduced or Full Port.</li>
                                                        <li>Compact Outside Screw & yoke.</li>
                                                        <li>Spiral Wound Gasket of Stainless Steel.</li>
                                                        <li>Bolted bonnet.</li>
                                                        <li>Replaceable or Integral Hard faced Seat.</li>                                                    
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:10px;" id="service_div7" class="content">
                                                    <ul class="unordered-list">                                                   
                                                        <li>Pressure testing API 598.</li>
                                                        <li>Other ISO 9001:2008.</li>                                                                            
                                                    </ul>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="standard_div7" class="content">                                        
                                                    <ul class="unordered-list">                                                   
                                                        <li>Valve Design EN ISO 15761 & ASME B 16.34.</li>
                                                        <li>End to End ASME B16.10 for flanged valves 8 MEWPL Std. for threaded / socket & Buttweld ends.</li>
                                                        <li>Threaded os per BSP Il – IS 554 & NPT as per ANSI B 1.20.1.</li>
                                                        <li>SocketweldosperANSlB 16.11.</li>
                                                        <li>Buttweld Dimersions ASME B16.25.</li>
                                                        <li>Flanged Dimensions ASME B 16.5 & ISO 7005-1 Part.</li>
                                                    </ul>
                                                </div>
                                                <div style="text-align:center;margin-left:15px;word-spacing:10px;" id="catalog_div7" class="content">
                                                    <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="display:inline-block;">
                                                        <a href="<?php echo base_url('assets/').'product_pdf/Forged_Globe_Valve.pdf';?>" style="display:inherit;">
                                                            <div class="single-gallery-image" style="background: url(<?php echo base_url('assets/')?>/img/pdf_img/chk_7.jpg);width:250px;height:250px;"></div>
                                                        </a>
                                                        <h6>For Detailed Dimension, Please Download E-Catalog</h6>
                                                    </div>                                                    
                                                </div>
                                            </div>                                        
                                        </div>
                                    <?php }else if($_GET['product']=='8'){?>
                                        <div class="table-row">
                                            <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="text-align:left;margin-left:15px;">                                                                                        
                                                <div style="text-align:left;margin-left:15px;" id="design_div8" class="content">
                                                    <ul class="unordered-list">                                                    
                                                        <li>Reduced or Full Port.</li>
                                                        <li>Spiral Wound Gasket of Stainless Steel.</li>
                                                        <li>Bolted Cop.</li>
                                                        <li>Socket Weld or Threaded Ends.</li>
                                                        <li>Replaceable or Integral Hard faced Seat.</li>                                                    
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:10px;" id="service_div8" class="content">
                                                    <ul class="unordered-list">                                                   
                                                        <li>Pressure testing API 598.</li>
                                                        <li>Other ISO 9001:2008.</li>                                                                            
                                                    </ul>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="standard_div8" class="content">                                        
                                                    <ul class="unordered-list">                                                   
                                                        <li>Valve Design EN ISO 15761 & ASME B16.34.</li>
                                                        <li>End to End ASME B 16.10 for flanged valves & MEWPL Std. for threaded / socket 8 Buttweld ends.</li>
                                                        <li>Threaded as pe BSP II – IS 554 & NPT as per ANSI B 1.20.1.</li>
                                                        <li>Socket weld as per ANSI B 16.11.</li>
                                                        <li>Buttweld Dimensions ASME B 16.25.</li>
                                                        <li>Flanged Dimensions ASME B 16.58 ISO 7005-1 Part.</li>
                                                    </ul>
                                                </div>
                                                <div style="text-align:center;margin-left:15px;word-spacing:10px;" id="catalog_div8" class="content">
                                                    <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="display:inline-block;">
                                                        <a href="<?php echo base_url('assets/').'product_pdf/Forged_Lift_Check_Valve.pdf';?>" style="display:inherit;">
                                                            <div class="single-gallery-image" style="background: url(<?php echo base_url('assets/')?>/img/pdf_img/chk_8.jpg);width:250px;height:250px;"></div>
                                                        </a>
                                                        <h6>For Detailed Dimension, Please Download E-Catalog</h6>
                                                    </div>                                                    
                                                </div>
                                            </div>                                        
                                        </div>
                                    <?php }?>     
                                    </div>
                                </div>
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
        let productParams = new URLSearchParams(window.location.search);
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        let param = productParams.get('product');
        let int_pr = parseInt(param);
        console.log(param);
        var div_design = $('#design_div'+param);
        var div_service = $('#service_div'+param);
        var div_standard = $('#standard_div'+param);
        var div_catalog = $('#catalog_div'+param);
        var design = $('#design');
        var service = $('#service');
        var standard = $('#standard');
        var catalog = $('#catalog');
        
        if(param =='4' || param =='5')
        {
            var test = $('#test');
            var div_test = $('#test_div'+param);
        }     
        
        $(document).ready(function () {
            // alert("Hello Frends chai peelo");            
            // alert(param);
            $(document).ajaxStart(function(){
                $("#wait").show();
            });
            $(document).ajaxComplete(function(){
                $("#wait").hide();
            });

            $('#myform').submit(function() {
                $('#sub_pro').val("<?php echo $product_name;?>");
                $('#product').val('General Purpose');
                alert($('#sub_pro').val());
            });
            
            if(param != '4' && param != '5')
            {
                div_design.show();
                design.css("background-color", "#FFCC2A ");
                design.click(function () {
                    if(div_design.is(":visible")){
                        div_design.hide();
                        service.css("background-color", "#0D5995");
                    }
                    else if(div_standard.is(":visible")){
                        div_standard.hide();
                        standard.css("background-color", "#0D5995");
                    }
                    else if(div_catalog.is(":visible")){
                        div_catalog.hide();
                        catalog.css("background-color", "#0D5995");
                    }                
                    div_design.show();
                    design.css("background-color", "#FFCC2A");
                });

                service.click(function () {
                    if(div_design.is(":visible")){
                        div_design.hide();
                        design.css("background-color", "#0D5995");
                    }
                    if(div_standard.is(":visible")){
                        div_standard.hide();
                        standard.css("background-color", "#0D5995");
                    }
                    if(div_catalog.is(":visible")){
                        div_catalog.hide();
                        catalog.css("background-color", "#0D5995");
                    } 
                    div_service.show();                
                    service.css("background-color", "#FFCC2A");
                });

                standard.click(function () {
                    if(div_design.is(":visible")){
                        div_design.hide();
                        design.css("background-color", "#0D5995");
                    }
                    if(div_service.is(":visible")){
                        div_service.hide();
                        service.css("background-color", "#0D5995");
                    }
                    if(div_catalog.is(":visible")){
                        div_catalog.hide();
                        catalog.css("background-color", "#0D5995");
                    } 
                    div_standard.show();
                    standard.css("background-color", "#FFCC2A");
                    
                });

                catalog.click(function () {
                    if(div_design.is(":visible")){
                        div_design.hide();
                        design.css("background-color", "#0D5995");
                    }
                    if(div_service.is(":visible")){
                        div_service.hide();
                        service.css("background-color", "#0D5995");
                    }
                    if(div_standard.is(":visible")){
                        div_standard.hide();
                        standard.css("background-color", "#0D5995");
                    } 
                    div_catalog.show();
                    catalog.css("background-color", "#FFCC2A");                
                });
            }
            else if(param=='4' || param =='5')
            {
                div_design.show();
                design.css("background-color", "#FFCC2A ");
                design.click(function () {
                    if(div_service.is(":visible")){
                        div_service.hide();
                        service.css("background-color", "#0D5995");
                    }
                    if(div_standard.is(":visible")){
                        div_standard.hide();
                        standard.css("background-color", "#0D5995");
                    }
                    if(div_catalog.is(":visible")){
                        div_catalog.hide();
                        catalog.css("background-color", "#0D5995");
                    }
                    if(div_test.is(":visible")){
                        div_test.hide();
                        test.css("background-color", "#0D5995");
                    }                
                    div_design.show();
                    design.css("background-color", "#FFCC2A");
                });

                service.click(function () {
                    if(div_design.is(":visible")){
                        div_design.hide();
                        design.css("background-color", "#0D5995");
                    }
                    if(div_standard.is(":visible")){
                        div_standard.hide();
                        standard.css("background-color", "#0D5995");
                    }
                    if(div_catalog.is(":visible")){
                        div_catalog.hide();
                        catalog.css("background-color", "#0D5995");
                    } 
                    if(div_test.is(":visible")){
                        div_test.hide();
                        test.css("background-color", "#0D5995");
                    }
                    div_service.show();                
                    service.css("background-color", "#FFCC2A");
                });

                standard.click(function () {
                    if(div_design.is(":visible")){
                        div_design.hide();
                        design.css("background-color", "#0D5995");
                    }
                    if(div_service.is(":visible")){
                        div_service.hide();
                        service.css("background-color", "#0D5995");
                    }
                    if(div_catalog.is(":visible")){
                        div_catalog.hide();
                        catalog.css("background-color", "#0D5995");
                    }
                    if(div_test.is(":visible")){
                        div_test.hide();
                        test.css("background-color", "#0D5995");
                    } 
                    div_standard.show();
                    standard.css("background-color", "#FFCC2A");
                    
                });

                catalog.click(function () {
                    if(div_design.is(":visible")){
                        div_design.hide();
                        design.css("background-color", "#0D5995");
                    }
                    if(div_service.is(":visible")){
                        div_service.hide();
                        service.css("background-color", "#0D5995");
                    }
                    if(div_standard.is(":visible")){
                        div_standard.hide();
                        standard.css("background-color", "#0D5995");
                    } 
                    if(div_test.is(":visible")){
                        div_test.hide();
                        test.css("background-color", "#0D5995");
                    }
                    div_catalog.show();
                    catalog.css("background-color", "#FFCC2A");                
                });

                test.click(function () {
                    if(div_design.is(":visible")){
                        div_design.hide();
                        design.css("background-color", "#0D5995");
                    }
                    if(div_service.is(":visible")){
                        div_service.hide();
                        service.css("background-color", "#0D5995");
                    }
                    if(div_standard.is(":visible")){
                        div_standard.hide();
                        standard.css("background-color", "#0D5995");
                    }
                    if(div_catalog.is(":visible")){
                        div_catalog.hide();
                        standard.css("background-color", "#0D5995");
                    } 
                    div_test.show();
                    test.css("background-color", "#FFCC2A");                
                });
            }     
            
            

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
        function numberOnly(id) {
            // Get element by id which passed as parameter within HTML element event
            var element = document.getElementById(id);
            // Use numbers only pattern, from 0 to 9
            var regex = /[^0-9]/gi;
            // This removes any other character but numbers as entered by user
            element.value = element.value.replace(regex, "");
        }
        function checkEmail()
        {
            // $(this).attr("placeholder", "Type your answer here");
            $('#email').attr("placeholder","Enter email address");                
            alert($('#email').val());
            if($('#email').val() != '')
            {
                $('#email').validate();
                if(!emailReg.test($('#email').val()))
                {
                    // alert("Not valid");
                }
                else
                {
                    // alert("Valid");
                    var url = "<?php echo base_url('Enquiry/checkEmail')?>";
                    var email_id = $('#email').val();
                    var postData = $('#enquiryForm').serialize();
                    $.ajax(
                    {
                        url : url,                            
                        type: "POST",
                        data : {"email": email_id},
                        success:function(data, status) 
                        {
                            $("#wait").css("display", "none");
                            if(status == "success")
                            {
                                // alert(data); 
                                if(data!="true")
                                {
                                    // alert("Email Addres Not Valid");
                                    $('#email').focus();
                                    $('#email').css('border','1px solid red');
                                    var error = document.getElementById("error");
                                        // Changing content and color of content 
                                    error.textContent = "Email Address does not Exists!" 
                                    error.style.color = "red"; 
                                    exit();
                                }
                                else
                                {
                                    var error = document.getElementById("error");
                                    error.textContent = "";
                                    document.getElementById("email").style.borderColor = "#e5e6e9"; 
                                    
                                }
                            // Do something on page
                            }
                            else
                            { 
                            // Do something on page
                            }
                        },
                    });  
                }
            }
        }
        
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