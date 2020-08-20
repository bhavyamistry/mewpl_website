<!doctype html>
<html class="no-js" lang="zxx">
<?php
    $product = $_GET['product'];

    $product_det = '';
    $product_name = '';
    if($product=='1')
    {
        $product_name = 'Jacketed Ball Valve With Two Oversize Flange';        
        $product_det = array("name"=>"Jacketed Ball Valve With Two Oversize Flange",
        "img"=>"img/sub_products/sub_sp_jk_two_flange.jpg",    
        );
    }
    else if($product=='2')
    {
        $product_name = 'Trunion Mounted Ball Valve';
        $product_det = array("name"=>"Trunion Mounted Ball Valve",
        "img"=>"img/sub_products/sub_sp_trunnion.png"        
        );
    }
    else if($product=='3')
    {
        $product_name = 'Extended Stem Ball Valve';
        $product_det = array("name"=>"Extended Stem Ball Valve",
        "img"=>"img/sub_products/sub_sp_extnded.jpg"       
        );
    }
    else if($product=='4')
    {
        $product_name = 'Three Way Four Seated Threaded & Flanged Ball Valve';
        $product_det = array("name"=>"Three Way Four Seated Threaded & Flanged Ball Valve",
        "img"=>"img/sub_products/sub_sp_four_seated.jpg"
        );
    }
    else if($product=='5')
    {
        $product_name = 'Three Way Two Seated L Port Flanged Ball Valve';
        $product_det = array("name"=>"Three Way Two Seated L Port Flanged Ball Valve",
        "img"=>"img/sub_products/sub_sp_three-way-two-piece-design.jpg"
        );
    }
    else if($product=='6') {
        $product_name = 'Uni-directional Flush Bottom Ball Valve (Type: Full Bore with oversized Flange)';
        $product_det = array("name"=>"Uni-directional Flush Bottom Ball Valve (Type: Full Bore with oversized Flange)",
        "img"=>"img/sub_products/sub_sp_uni.png"
        );
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
                                <div class="col-md-8" style="height:45%">
                                    <div class="progress-table-wrap">
                                        <div class="progress-table" style="padding-top:5px;background;#D6E3F4;">                                        
                                            <?php if($product==1){?>            
                                                <div class="table-row" style="text-align: left;border-top: 0px;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Model :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>BL-J-1-F-F-A1 (150#) , BL-J-1-F-F-A2 (300#)</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;background: #F1F1F1;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Size :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>15-150 mm</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Bore :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>Full bore</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;background: #F1F1F1;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Material :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>Carbon Steel, Stainless Steel and Alloy Steel</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Seat :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>RPTFE / PEEK</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;background: #F1F1F1;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Ratings :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>150 & 300 Class</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Ends :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px">Flanged<h6></h6></div>
                                                </div>                                            
                                            <?php }else if($product==2){?>
                                                <div class="table-row" style="text-align: left;border-top: 0px;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Model :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px">
                                                        <div>
                                                            <h6>Regular bore :</h6>
                                                            <h6>TMBV-2-R-F-A1   (150#)</h6>
                                                            <h6>TMBV-2-R-F-A2   (300#)</h6>
                                                            <h6>Full Bore :</h6>
                                                            <h6>TMBV-2-F-F-A1    (150#)</h6>
                                                            <h6>TMBV-2-F-F-A2   (300#)</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table-row" style="text-align: left;background: #F1F1F1;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Size :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>50-300 mm</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Bore :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>Regular / Full bore</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;background: #F1F1F1;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Material :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>Carbon Steel, Low carbon steel, Stainless Steel and Alloy Steel</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Seat :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>PTFE / RPTFE / PEEK</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;background: #F1F1F1;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Ratings :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>150 / 300 / 600 Class</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Ends :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px">Flanged<h6></h6></div>
                                                </div>                                            
                                            <?php }else if($product==3){?>
                                                <div class="table-row" style="text-align: left;border-top: 0px;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Model :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px">
                                                        <div>
                                                            <h6>Regular bore :</h6>
                                                            <h6>BL-X-2-R-F-A1 (150#)</h6>
                                                            <h6>BL-X-2-R-F-A2 (300#)</h6>
                                                            <h6>Full Bore :</h6>
                                                            <h6>BL-X-2-F-F-A1 (150#)</h6>
                                                            <h6>BL-X-2-F-F-A2 (300#)</h6>
                                                            <h6>BL-X-2-F-F-A3 (600#)</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table-row" style="text-align: left;background: #F1F1F1;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Size :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>15-250 mm</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Bore :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>Regular / Full bore</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;background: #F1F1F1;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Material :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>Carbon Steel, Low carbon steel, Stainless Steel and Alloy Steel</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Seat :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>PTFE / RPTFE/ PEEK</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;background: #F1F1F1;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Ratings :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>150 / 300 / 600 Class</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Ends :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px">Flanged<h6></h6></div>
                                                </div>                                            
                                            <?php }else if($product==4){?>     
                                                <div class="table-row" style="text-align: left;border-top: 0px;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Model :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px">
                                                        <h6>L PORT:</h6>
                                                        <h6>BL-L-1-F-F-A1(FLANGE ENDS150#)</h6>
                                                        <h6>BL-L-1-F-P-A4 (BSP ll,800#)</h6>
                                                        <h6>BL-L-1-F-N-A4 (NPT,800#)</h6>
                                                        <h6>T PORT:</h6>
                                                        <h6>BL-T-1-F-F-A1(FLANGE ENDS150#)</h6>
                                                        <h6>BL-T-1-F-P-A4 (BSP ll,800#)</h6>
                                                        <h6>BL-T-1-F-N-A4 (NPT,800#)</h6>
                                                    </div>
                                                </div>
                                                <div class="table-row" style="text-align: left;background: #F1F1F1;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Size :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>15-50 mm</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Bore :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>Regular / Full bore</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;background: #F1F1F1;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Material :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>Carbon Steel, Stainless Steel and Alloy Steel</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Seat :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>PTFE/ RPTFE/ PEEK</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;background: #F1F1F1;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Ratings :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>150 & 800 Class</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Ends :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px">Flanged, Threaded to BSP II OR NPT<h6></h6></div>
                                                </div>                                            
                                            <?php }else if($product==5){?>
                                                <div class="table-row" style="text-align: left;border-top: 0px;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Model :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px">
                                                        <h6>L PORT (2 Seated):</h6>
                                                        <h6>BL-L-2-F-F-A1(FLANGE ENDS150#)</h6>
                                                        <h6>T PORT (3 Seated):</h6>
                                                        <h6>BL-T-1-F-F-A1(FLANGE ENDS150#)</h6>
                                                    </div>
                                                </div>
                                                <div class="table-row" style="text-align: left;background: #F1F1F1;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Size :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>25-250 mm L Port , 32-100 mm T Port</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Bore :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>Regular / Full bore</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;background: #F1F1F1;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Material :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>Carbon Steel, Stainless Steel and Alloy Steel</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Seat :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>PTFE/ RPTFE / PEEK</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;background: #F1F1F1;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Ratings :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>150 Class</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Ends :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px">Flanged<h6></h6></div>
                                                </div>                                            
                                            <?php }else if($product=='6'){?>
                                                <div class="table-row" style="text-align: left;border-top: 0px;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Design Code :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>ASME B 16.34, BS EN ISO 17292</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;background: #F1F1F1;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Size :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>11/2 to 4</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Operation :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>Lever operated or Pneumatic operated</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;background: #F1F1F1;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>Pressure Test :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>BS EN ISO 12266-1</h6></div>
                                                </div>
                                                <div class="table-row" style="text-align: left;">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 table-contents" style="text-align:center"><h5>End Flanges :</h5></div>
                                                    <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 table-contents" style="padding:0px"><h6>ANSI B 16.5</h6></div>
                                                </div>                                                                                            
                                            <?php }?>
                                        </div>
                                    </div>
                                    <?php if($product==1){?>
                                        <div style="padding:20px;"><h4>Extended Stem Available to suit Insulation / puffing on request</h4></div>
                                    <?php } else if($product==2){?>
                                        <div style="padding:20px;"><h4>API 6D Certified</h4></div>
                                    <?php } else if($product==3){?>
                                        <div style="padding:20px;"><h4>* Threaded, Socket weld & butt weld ends are also available upon request.</h4></div>
                                    <?php } else if($product=4){?>
                                        
                                    <?php } else if($product==5){?>

                                    <?php } else if($product==6){?>
                                    <?php }?>
                                    
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
                                            <span href="#" class="genric-btn primary radius"  id="service">Service Application</span>
                                            <span href="#" class="genric-btn primary radius"  id="standard">Standard Compliance</span>
                                            <span href="#" class="genric-btn primary radius"  id="catalog">Download E-Catalog</span>                                                                                
                                        <?php } else if($_GET['product']==2){?>                                             
                                            <span href="#" class="genric-btn primary radius" style="margin-left:5px;" id="design" onclick="myfunc()">Design Feature & Options</span>                                            
                                            <span href="#" class="genric-btn primary radius"  id="standard">Standard Compliance</span>
                                            <span href="#" class="genric-btn primary radius"  id="catalog">Download E-Catalog</span>                                                                                
                                        <?php } else if($_GET['product']==3){?>                                             
                                            <span href="#" class="genric-btn primary radius" style="margin-left:5px;" id="design" onclick="myfunc()">Design Feature & Options</span>
                                            <span href="#" class="genric-btn primary radius"  id="service">Service Application</span>
                                            <span href="#" class="genric-btn primary radius"  id="standard">Standard Compliance</span>
                                            <span href="#" class="genric-btn primary radius"  id="catalog">Download E-Catalog</span>                                                                                
                                        <?php } else if($_GET['product']==4){?>                                             
                                            <span href="#" class="genric-btn primary radius" style="margin-left:5px;" id="design" onclick="myfunc()">Design Feature & Options</span>
                                            <span href="#" class="genric-btn primary radius"  id="service">Service Application</span>
                                            <span href="#" class="genric-btn primary radius"  id="standard">Standard Compliance</span>
                                            <span href="#" class="genric-btn primary radius"  id="catalog">Download E-Catalog</span>                                                                                
                                        <?php } else if($_GET['product']==5){?>                                             
                                            <span href="#" class="genric-btn primary radius" style="margin-left:5px;" id="design" onclick="myfunc()">Design Feature & Options</span>
                                            <span href="#" class="genric-btn primary radius"  id="service">Service Application</span>
                                            <span href="#" class="genric-btn primary radius"  id="standard">Standard Compliance</span>
                                            <span href="#" class="genric-btn primary radius"  id="catalog">Download E-Catalog</span>                                                                                
                                        <?php } else if($_GET['product']=='6'){?>                                             
                                            <span href="#" class="genric-btn primary radius"  id="catalog">Download E-Catalog</span>                                                                                
                                        <?php }?>
                                        </div>
                                    <?php if($_GET['product']==1){?>                                             
                                        <div class="table-row">
                                            <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="text-align:left;margin-left:15px;">                                                                                        
                                                <div style="text-align:left;margin-left:15px;" id="design_div1" class="content">
                                                    <ul class="unordered-list">                                                    
                                                        <li>Self adjustable gland packing.</li>
                                                        <li>Renewable Seat & Seals.</li>
                                                        <li>Maintenance free live loaded double sealing.</li>                                                
                                                        <li>High cycle stem packing system provides extra longer service life.</li>
                                                        <li>Anti-Static Device.</li>
                                                        <li>Blowout proof Stem.</li>
                                                        <li> O’ ring style body seals for better joint sealing & resuable.</li>
                                                    </ul>            
                                                    <br>                                                                        
                                                    <h5>OPTIONS:</h5>                                                    
                                                    <br>
                                                    <ul class="unordered-list">                                                   
                                                        <li>Vented ball to reduce damage caused by trapped cavity pressure.</li>
                                                        <li>Cavity free seals are available to reduce the possible entrapment of line media fluids between the ball and the shell.</li>
                                                        <li>Flange welded nozzles of 15NB and 20NB also available in place of screwed nozzles.</li>                                                        
                                                    </ul>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:10px;" id="service_div1" class="content">
                                                    <h6> Steam / Hot Oil is circulated to maintain the temperature of fluid and to prevent Solidification.</h6>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="standard_div1" class="content">                                        
                                                    <h6><b>Design</b> : ASME B 16.34, BS EN ISO 17292</h6>
                                                    <h6><b>Pressure Test</b> :  API 598, BS EN ISO 12266-1</h6>
                                                    <h6><b>Flange Dimension</b> : ANSI B 16.5</h6>                                                    
                                                    <h6><b>Quality Systems / Certifications</b> : ISO 9001:2000</h6>                                                                                                                         
                                                </div>
                                                <div style="text-align:center;margin-left:15px;word-spacing:10px;" id="catalog_div1" class="content">
                                                    <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="display:inline-block;">
                                                        <a href="<?php echo base_url('assets/').'product_pdf/Split_Body_Screwed_End.pdf';?>" style="display:inherit;">
                                                            <div class="single-gallery-image" style="background: url(<?php echo base_url('assets/')?>/img/pdf_img/gen_screwed.jpg);width:250px;height:250px;displat:block;"></div>
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
                                                    <li>Any port configuration Inlet / Outlet possible through 4 seats.</li>
                                                    <li>Full or Reduce Bore.</li>
                                                    <li>Self adjustable gland packing.</li>
                                                    <li>Renewable Seat & Seals.</li>
                                                    <li>’O’ ring style body seals for better joint sealing & resuable.</li>
                                                    <li>ISO Mounting pad to suit actuator gear box and other hardware mountings.
                                                    <li>Maintenance free live loaded double sealing.</li>
                                                    <li>High cycle stem packing system provides extra longer service life.
                                                    <li>Anti-Static Device.</li>
                                                    <li>Blowout proof Stem.</li>                                                       
                                                    </ul>                                                                                    
                                                    <h5>OPTIONS:</h5>
                                                    <ul class="unordered-list">                                                   
                                                    <li>L Port Bottom inlet to avoid intra port fluid transmission whilst in operation.</li>
                                                    <li>Extended stem & pad lock capabilities provide maximum safety.</li>
                                                    <li>Cavity free seals are available to reduce the possible entrapment of line media fluids between the ball and the shell.</li>
                                                    <li>Flange welded nozzles of 15NB and 20NB also available in place of screwed nozzles.</li>
                                                    </ul>
                                                </div>                                                
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="standard_div2" class="content">                                        
                                                    <h6><b>Design</b> : ASME B 16.34, BS EN ISO 17292 & API 6D</h6>
                                                    <h6><b>Pressure Test</b> :  API 598 / BS EN ISO 12266-1 / API 6D</h6>
                                                    <h6><b>Face to Face</b> :   ASME B 16.10 /API 6D</h6>
                                                    <h6><b>Flange Dimension</b> :  	ANSI B 16.5</h6>
                                                    <h6><b>Mounting Pad</b> :  	DIN 3337/ ISO 5211</h6>
                                                    <h6><b>Material Certification</b> : DIN 50.049-3 1B</h6>
                                                    <h6><b>Nace</b> : MR 01-75 complaint</h6>
                                                    <h6><b>Quality Systems / Certifications</b> : ISO 9001:2000</h6>                                                                                                                         
                                                </div>                                                
                                                <div style="text-align:center;margin-left:15px;word-spacing:10px;" id="catalog_div2" class="content">
                                                    <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="display:inline-block;">
                                                        <a href="<?php echo base_url('assets/').'product_pdf/TRUNNION_MOUNTED_BALL_VALVE.pdf';?>" style="display:inherit;">
                                                            <div class="single-gallery-image" style="background: url(<?php echo base_url('assets/')?>/img/pdf_img/sp_trunnion-mounted.jpg);width:250px;height:250px;displat:block;"></div>
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
                                                        <li>High quality casting.</li>
                                                        <li>Fully interchangeable trim parts.</li>
                                                        <li>Firesafe to API 607 Std.</li>
                                                        <li>Full or Reduce Bore.</li>
                                                        <li>Blowout proof Stem.</li>
                                                        <li>Renewable Seat & Seals.</li>
                                                        <li>Double Body seals (In Fire safe design only).</li>
                                                        <li>Anti-Static Device.</li>
                                                        <li>Live-loaded design eliminates stem leakage while providing longer life cycle.</li>
                                                        <li>Mounting Pad to DIN 3337 / ISO 5211.</li>
                                                        <li>Bi-direction design for back flow application.</li>
                                                    </ul>                                                                                    
                                                    <h5>OPTIONS:</h5>
                                                    <ul class="unordered-list">
                                                        <li>Extended handle for pipe insulation & safety whilst operation.</li>
                                                        <li>Extended Stem to suit pipe insulation, gland seals deformation, in-line leakage monitoring.</li>
                                                        <li>Pad lock capabilities provide maximum safety.</li>
                                                        <li>Vented ball to reduce seat damage caused by trapped cavity pressure.</li>
                                                        <li>Cavity free seals to reduce the possible entrapment of line media fluids in the void between the ball and the shell</li>
                                                    </ul>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:10px;" id="service_div3" class="content">
                                                    <h6>Mixing and Diverting with various flow patternsaand configurations.</h6>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="standard_div3" class="content">                                        
                                                    <h6><b>Design</b> : ASME B 16.34, BS EN ISO 17292 & API 6D</h6>
                                                    <h6><b>Pressure Test</b> :  API 598 / BS EN ISO 12266-1 / API 6D</h6>
                                                    <h6><b>Face to Face </b> : ASME B 16.10</h6>
                                                    <h6><b>Ends</b> : ASME B 16.10 (for Flange Ends only)Manufactuer’s std. (For Threaded Ends)</h6>
                                                    <h6><b>Ends Dimension</b> : 1) Threaded meets ANSI B2.1. 2) Flange meets ANSI B 16.5.</h6>
                                                    <h6><b>Mounting Pad</b> :  	DIN 3337/ ISO 5211</h6>
                                                    <h6><b>Material Certification</b> : DIN 50.049-3 1B</h6>
                                                    <h6><b>Quality Systems / Certifications</b> :   ISO 9001:2008, API 6D</h6>                                                                                                                         
                                                </div>                                                                                                                                                                      
                                                <div style="text-align:center;margin-left:15px;word-spacing:10px;" id="catalog_div3" class="content">
                                                    <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="display:inline-block;">
                                                        <a href="<?php echo base_url('assets/').'product_pdf/EXTENDED_STEM_BALL_VALVE.pdf';?>" style="display:inherit;">
                                                            <div class="single-gallery-image" style="background: url(<?php echo base_url('assets/')?>/img/pdf_img/sp_extended-stem.jpg);width:250px;height:250px;displat:block;"></div>
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
                                                        <li>Any port configuration Inlet / Outlet possible through 4 seats.</li>
                                                        <li>Full or Reduce Bore.</li>
                                                        <li>Self adjustable gland packing.</li>
                                                        <li>Renewable Seat & Seals.</li>
                                                        <li>’O’ ring style body seals for better joint sealing & resuable.</li>
                                                        <li>ISO Mounting pad to suit actuator gear box and other hardware mountings.</li>
                                                        <li>Maintenance free live loaded double sealing.</li>
                                                        <li>High cycle stem packing system provides extra longer service life.</li>
                                                        <li>Anti-Static Device.</li>
                                                        <li>Blowout proof Stem.</li>
                                                    </ul>                                                                                    
                                                    <h5>OPTIONS:</h5>                                                    
                                                    <ul class="unordered-list">
                                                        <li>L Port Bottom inlet to avoid intra port fluid transmission whilst in operation.</li>
                                                        <li>Extended stem & pad lock capabilities provide maximum safety.</li>
                                                        <li>Cavity free seals are available to reduce the possible entrapment of line media fluids between the ball and the shell.</li>
                                                        <li>Flange welded nozzles of 15NB and 20NB also available in place of screwed nozzles.</li>
                                                    </ul>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:10px;" id="service_div4" class="content">
                                                    <h6>Mixing and Diverting with various flow patternsaand configurations.</h6>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="standard_div4" class="content">                                        
                                                    <h6><b>Design</b> : ASME B 16.34, BS EN ISO 17292 & API 6D</h6>
                                                    <h6><b>Pressure Test</b> :  API 598 / BS EN ISO 12266-1 / API 6D</h6>
                                                    <h6><b>Face to Face</b> : ASME B 16.10</h6>
                                                    <h6><b>Ends</b> : ASME B 16.10 (for Flange Ends only)Manufactuer’s std. (For Threaded Ends)</h6>
                                                    <h6><b>Ends Dimension</b> : 1) Threaded meets ANSI B2.1 2) Flange meets ANSI B 16.5</h6>                            
                                                    <h6><b>Mounting Pad</b> :  	DIN 3337/ ISO 5211</h6>                                                     
                                                    <h6><b>Material Certification</b> : DIN 50.049-3 1B</h6>
                                                    <h6><b>Quality Systems / Certifications</b> : ISO 9001:2008, API 6D</h6>                                                                                                                         
                                                </div>
                                                <div style="text-align:center;margin-left:15px;word-spacing:10px;" id="catalog_div4" class="content">
                                                    <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="display:inline-block;">
                                                        <a href="<?php echo base_url('assets/').'product_pdf/three_way_four_seated.pdf';?>" style="display:inherit;">
                                                            <div class="single-gallery-image" style="background: url(<?php echo base_url('assets/')?>/img/pdf_img/sp_three-way-four-seated.jpg);width:250px;height:250px;displat:block;"></div>
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
                                                        <li>Double body Seals provides safety on joint expansions.</li>
                                                        <li>Full or Reduce Bore.</li>
                                                        <li>Self adjustable gland packing.</li>
                                                        <li>Renewable Seat & Seals.</li>
                                                        <li>’O’ ring style body seals for better joint sealing & reusable.</li>
                                                        <li>ISO Mounting pad to suit actuator gear box and other hardware mountings.</li>
                                                        <li>Maintenance free live loaded double sealing.</li>
                                                        <li>High cycle stem packing system provides extra longer service life.</li>
                                                        <li>Anti-Static Device.</li>
                                                        <li>Blowout proof Stem.</li>
                                                    </ul>                                                                                    
                                                    <h5>OPTIONS:</h5>                                                    
                                                    <ul class="unordered-list">
                                                        <li>L Port Bottom inlet to avoid intra port fluid transmission whilst in operation.</li>
	                                                    <li>Extended stem & pad lock capabilities provide maximum safety.</li>
                                                    </ul>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:10px;" id="service_div5" class="content">
                                                    <h6>Mixing and Diverting with various flow patterns and configurations.</h6>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="standard_div5" class="content">                                        
                                                    <h6><b>Design</b> : ASME B 16.34, BS EN ISO 17292 & API 6D</h6>
                                                    <h6><b>Pressure Test</b> :  API 598 / BS EN ISO 12266-1 / API 6D</h6>
                                                    <h6><b>End to End</b> : Manufactuer’s std.</h6>
                                                    <h6><b>End Dimension</b> : Flange meets ANSI B 16.5</h6>
                                                    <h6><b>Mounting Pad</b> : DIN 3337/ ISO 5211</h6>            
                                                    <h6><b>Material Certification</b> : DIN 50.049-3 1B</h6>
                                                    <h6><b>Quality Systems / Certifications</b> : ISO 9001:2008, API 6D</h6>                                                                                                                         
                                                </div>
                                                <div style="text-align:center;margin-left:15px;word-spacing:10px;" id="catalog_div5" class="content">
                                                    <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="display:inline-block;">
                                                        <a href="<?php echo base_url('assets/').'product_pdf/three_way_two_seated.pdf';?>" style="display:inherit;">
                                                            <div class="single-gallery-image" style="background: url(<?php echo base_url('assets/')?>/img/pdf_img/sp_three-way-two-seated.jpg);width:250px;height:250px;displat:block;"></div>
                                                        </a>
                                                        <h6>For Detailed Dimension, Please Download E-Catalog</h6>
                                                    </div>                                                    
                                                </div>
                                            </div>                                        
                                        </div>
                                    <?php } else if($_GET['product']==6) {?>
                                        <div class="table-row">
                                            <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="text-align:left;margin-left:15px;">                                                
                                                <div style="text-align:center;margin-left:15px;word-spacing:10px;" id="catalog_div6" class="content">
                                                    <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="display:inline-block;">
                                                        <a href="<?php echo base_url('assets/').'product_pdf/FLUSH_BOTTOM_BALL_VALVE.pdf';?>" style="display:inherit;">
                                                            <div class="single-gallery-image" style="background: url(<?php echo base_url('assets/')?>/img/pdf_img/sp_flush-bottom.jpg);width:250px;height:250px;displat:block;"></div>
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
        let param = productParams.get('product');
        // console.log(param);
        if(param!='6')
        {
            var div_design = $('#design_div'+param);
            var div_service = $('#service_div'+param);
            var div_standard = $('#standard_div'+param);
            var div_catalog = $('#catalog_div'+param);
            var design = $('#design');
            var service = $('#service');
            var standard = $('#standard');
            var catalog = $('#catalog');
        }
        else
        {
            var div_catalog = $('#catalog_div'+param);
            var catalog = $('#catalog');
        }
        

        

        $(document).ready(function () {
            // alert("Hello Frends chai peelo");            
            // alert(param);
            if(param!='6')
            {
                div_design.show();
                design.css("background-color", "#FFCC2A ");
                design.click(function () {
                    if(div_design.is(":visible")){
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
            else
            {
                div_catalog.show();
                catalog.css("background-color", "#FFCC2A ");
                
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