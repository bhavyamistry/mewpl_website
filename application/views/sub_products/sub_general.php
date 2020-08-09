<!doctype html>
<html class="no-js" lang="zxx">
<?php
    $product = $_GET['product'];
    $product_det = '';
    $product_name = '';
    if($product=='1')
    {
        $product_name = 'Split Body, Full Bore, Side Entry Screwed End Ball Valve';
        $product_ends = array('BSP “II”','NPT');
        $product_det = array("name"=>"Split Body, Full Bore, Side Entry Screwed End Ball Valve",
        "img"=>"img/sub_products/sub_gen_screwed.jpg",
        "desc"=>"Compact and suitable for eliminating external joint leakage to the atmosphere where applications are highly critical,media is expensive, toxic and external joint leakage is not acceptable.",
        "size"=>"8-50 mm 1/4″ to 2″",
        "ends" => $product_ends,
        );
    }
    elseif($product=='2')
    {
        $product_name = 'Single Piece, Split Body, Regular Bore, Side Entry, Flange End Ball Valve';
        $product_det = array("name"=>"Single Piece, Split Body, Regular Bore, Side Entry, Flange End Ball Valve",
        "img"=>"img/sub_products/sub_gen_single_flange.jpg",
        "desc"=>"Compact and suitable for eliminating external joint leakage to the atmosphere where applications are highly critical,media is expensive, toxic and external joint leakage is not acceptable.",
        "size"=>"8-50 mm 1/4″ to 2″",
        );
    }
    elseif($product=='3')
    {
        $product_name = 'Two Piece, Split Body, Side Entry, Flange End Ball Valve';
        $product_det = array("name"=>"Two Piece, Split Body, Side Entry, Flange End Ball Valve",
        "img"=>"img/sub_products/sub_gen_two_flange.jpg",
        "desc"=>"Two-piece design is Ideally suitable for all kind of Process & Utility application with options of full bore & Regular bore, where maintenance of Valves are easy.",
        "size"=>"8-50 mm 1/4″ to 2″",
        );
    }
    elseif($product=='4')
    {
        $product_name = 'Three Piece, Split Body, Side Entry Ball Valve';
        $product_det = array("name"=>"Three Piece, Split Body, Side Entry Ball Valve",
        "img"=>"img/sub_products/sub_gen_three_side.jpg",
        "desc"=>"Three piece design is well suited for use in piping systems where line breaks are required and total entry into the line is necessary. The center section-body can swing out, eliminating the dismantling of entire valve from pipeline.Note: This is possible only for threaded, socket & butt weld end connections.",
        "size"=>"8-50 mm 1/4″ to 2″",
        );
    }
    // echo($product);
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
                                            <li><img src="<?php echo base_url('assets/').$product_det['img']; ?>"/></li>
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
                                </div>
                            </div>
                        </div>
                        <div class="section-top-border" style="padding:inherit;">
                            <!-- <h3 class="mb-30">Table</h3> -->
                            <div class="progress-table-wrap">
                                <div class="progress-table">
                                    <div class="table-head">
                                    <?php if($product==1 || $product==2){?>                                     
                                            <div class="serial" style="padding-left:0px;">Size</div>
                                            <div class="visit">Ends</div>
                                            <div class="visit">Class</div>
                                            <div class="percentage">Model No.</div>                                                                                
                                    <?php } else if($product==3 || $product==4) {?>                                        
                                            <div class="serial" style="padding-left:0px;">Size</div>
                                            <div class="visit">Bore</div>
                                            <div class="visit">Ends</div>
                                            <div class="visit">Class</div>
                                            <div class="percentage">Model No.</div>                                        
                                        
                                    <?php }?>
                                    </div>
                                 
                                <?php if($product==1){?>            
                                    <div class="table-row">
                                        <div class="col-lg-3 col-md-5 col-sm-5 col-xs-5 table-contents" style="text-align:center"><?php echo $product_det['size'];?></div>
                                        <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">
                                        <div class="short-div">BSP “II”</div>
                                        <div class="short-div" style="border-top: 3px solid #edf3fd;">NPT</div>
                                        </div>                                                                                
                                        <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px">
                                        <div class="short-div">300</div>
                                        <div class="short-div" style="border-top: 3px solid #edf3fd;">300</div>
                                        </div>
                                        <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px;padding-right:30px;">
                                        <div class="short-div">BL-1-F-R-A2</div>
                                        <div class="short-div" style="border-top: 3px solid #edf3fd;">BL-1-F-N-A2</div>
                                        </div>                                        
                                    </div> 
                                <?php } else if($product==2) {?> 
                                    <div class="table-row">
                                        <div class="col-lg-3 col-md-5 col-sm-5 col-xs-5 table-contents" style="text-align:center;flex:2;">15-150 mm 1/2″ to 6″</div>
                                        <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px;flex:1;">
                                            <div class="short-div">Standard</div>
                                            <div class="short-div" style="border-bottom: 1px solid #edf3fd;">Fire Safe</div>
                                            <div class="short-div" style="border-top: 3px solid #edf3fd;">Standard</div>
                                            <div class="short-div" style="border-top: 1px solid #edf3fd;">Fire Safe</div>
                                        </div>                                                                                
                                        <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0pxflex:1;">
                                            <div class="short-div">150</div>
                                            <div class="short-div" style="border-top: 1px solid #edf3fd;">150</div>
                                            <div class="short-div" style="border-top: 3px solid #edf3fd;">300</div>
                                            <div class="short-div" style="border-top: 1px solid #edf3fd;">300</div>
                                        </div>
                                        <div class="col-lg-3 col-md-2 col-sm-3 col-xs-2 table-contents" style="padding:0px;padding-right:30px;flex:1;">
                                            <div class="short-div">BL-1-R-F-A1</div>
                                            <div class="short-div" style="border-top: 1px solid #edf3fd;">BL-F-1-R-F-A1</div>
                                            <div class="short-div" style="border-top: 3px solid #edf3fd;">BL-1-R-F-A2</div>
                                            <div class="short-div" style="border-top: 1px solid #edf3fd;">BL-F-1-R-F-A1</div>
                                        </div>
                                    </div>
                                    
                                <?php } else if($product==3){?>                                    
                                    <div class="table-row">
                                        <div class="insidevisit">15-250 mm 1/2″ TO 10″</div>
                                        <div class="insidevisit" style="padding:0px;">                                            
                                            <div class="short-div3">Regular</div>
                                            <div class="short-div3">Full</div>                    
                                            <div class="short-div3">Regular</div>
                                            <div class="short-div3" style="border-bottom:0px;">Full</div>
                                        </div> 
                                        <div class="insidevisit" style="padding:0px;">
                                            <div class="short-div4">Standard</div>
                                            <div class="short-div2">Fire Safe</div>
                                            <div class="short-div4">Standard</div>
                                            <div class="short-div2">Fire Safe</div>
                                            <div class="short-div4">Standard</div>
                                            <div class="short-div2">Fire Safe</div>
                                            <div class="short-div4">Standard</div>
                                            <div class="short-div2" style="border-bottom:0px;">Fire Safe</div>                                            
                                        </div>                                                                                
                                        <div class="insidevisit" style="padding:0px">
                                            <div class="short-div4">150</div>
                                            <div class="short-div4">150</div>
                                            <div class="short-div2">150</div>
                                            <div class="short-div2">150</div>
                                            <div class="short-div4">300</div>
                                            <div class="short-div4">300</div>
                                            <div class="short-div2">300</div>
                                            <div class="short-div2" style="border-bottom:0px;">300</div>                                            
                                        </div>
                                        <div class="insidevisit" style="padding:0px;padding-right:30px;">
                                            <div class="short-div4">BL-2-R-F-A1</div>
                                            <div class="short-div2">BL-F-2-R-F-A1</div>
                                            <div class="short-div4">BL-2-F-F-A1</div>
                                            <div class="short-div2">BL-F-2-F-F-A1</div>
                                            <div class="short-div4">BL-2-R-F-A2</div>
                                            <div class="short-div2">BL-F-2-R-F-A2</div>
                                            <div class="short-div4">BL-2-F-F-A2</div>
                                            <div class="short-div2" style="border-bottom:0px;">BL-F-2-F-F-A2</div>                                    
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="insidevisit">15-250 mm 1/2″ TO 10″</div>
                                        <div class="insidevisit" style="padding:0px;">                                            
                                            <div class="short-div3" style="border-bottom:0px;">Full</div>                                            
                                        </div> 
                                        <div class="insidevisit" style="padding:0px;">
                                            <div class="short-div4">Standard</div>
                                            <div class="short-div2" style="border-bottom:0px;">Fire Safe</div>                                                                                        
                                        </div>                                                                                
                                        <div class="insidevisit" style="padding:0px">
                                            <div class="short-div4">600</div>
                                            <div class="short-div4" style="border-bottom:0px;">600</div>                                                                                     
                                        </div>
                                        <div class="insidevisit" style="padding:0px;padding-right:30px;">
                                            <div class="short-div4">BL-2-F-F-A3</div>
                                            <div class="short-div2" style="border-bottom:0px;">BL-F-2-F-F-A23</div>                                                                             
                                        </div>
                                    </div>
                                <?php }else if($product==4){?>
                                    <div class="table-row">
                                        <div class="insidevisit">15-55 mm 1/2″ to 2″</div>
                                        <div class="insidevisit" style="padding:0px;">                                            
                                            <div style="padding:0px;">
                                                <div class="short-div3" style="border-bottom: 1px solid grey;padding-bottom:82px;padding-top:82px">Full</div>
                                                <div class="short-div3" style="border-bottom: 1px solid grey;padding-bottom:82px;padding-top:82px">Regular</div>
                                            </div>
                                            <!-- <div class="short-div3">Full</div>                    
                                            <div class="short-div3">Regular</div>
                                            <div class="short-div3" style="border-bottom:0px;">Full</div> -->
                                        </div> 
                                        <div class="insidevisit" style="padding:0px;">
                                            <div class="short-div4" style="border-bottom: 1px solid grey;">Screwed- BPS “II”</div>
                                            <div class="short-div2" style="border-bottom: 1px solid grey;">Screwed-NPT</div>
                                            <div class="short-div4" style="border-bottom: 1px solid grey;">Socketweld</div>
                                            <div class="short-div2" style="border-bottom: 1px solid grey;">SW with Pups</div>
                                            <div class="short-div4" style="border-bottom: 1px solid grey;">Screwed- BPS “II”</div>
                                            <div class="short-div2" style="border-bottom: 1px solid grey;">Screwed-NPT</div>
                                            <div class="short-div4" style="border-bottom: 1px solid grey;">Socketweld</div>
                                            <div class="short-div2" style="border-bottom: 1px solid grey;">SW with Pups</div>
                                            <!-- <div class="short-div4">Standard</div>
                                            <div class="short-div2">Fire Safe</div>
                                            <div class="short-div4">Standard</div>
                                            <div class="short-div2" style="border-bottom:0px;">Fire Safe</div>                                             -->
                                        </div>                                                                                
                                        <div class="insidevisit" style="padding:0px">
                                            <div class="short-div4" style="border-bottom: 1px solid grey;">600</div>
                                            <div class="short-div2" style="border-bottom: 1px solid grey;">600</div>
                                            <div class="short-div4" style="border-bottom: 1px solid grey;">600</div>
                                            <div class="short-div2" style="border-bottom: 1px solid grey;">600</div>
                                            <div class="short-div4" style="border-bottom: 1px solid grey;">800</div>
                                            <div class="short-div2" style="border-bottom: 1px solid grey;">800</div>
                                            <div class="short-div4" style="border-bottom: 1px solid grey;">800</div>
                                            <div class="short-div2" style="border-bottom: 1px solid grey;">800</div>
                                            <!-- <div class="short-div4">300</div>
                                            <div class="short-div4">300</div>
                                            <div class="short-div2">300</div>
                                            <div class="short-div2" style="border-bottom:0px;">300</div>                                             -->
                                        </div>
                                        <div class="insidevisit" style="padding:0px;padding-right:30px;">
                                            <div class="short-div4" style="border-bottom: 1px solid grey;">BL-30-F-P-A3</div>
                                            <div class="short-div2" style="border-bottom: 1px solid grey;">BL-30-F-N-A3</div>
                                            <div class="short-div4" style="border-bottom: 1px solid grey;">BL-30-F-W-A3</div>
                                            <div class="short-div2" style="border-bottom: 1px solid grey;">BL-30-F-WN-A3</div>
                                            <div class="short-div4" style="border-bottom: 1px solid grey;">BL-3E-F-P-A4</div>
                                            <div class="short-div2" style="border-bottom: 1px solid grey;">BL-3E-F-N-A4</div>
                                            <div class="short-div4" style="border-bottom: 1px solid grey;">BL-3E-F-W-A4</div>
                                            <div class="short-div2" style="border-bottom: 1px solid grey;">BL-3E-F-WN-A4</div>
                                            <!-- <div class="short-div4">BL-2-R-F-A2</div>
                                            <div class="short-div2">BL-F-2-R-F-A2</div>
                                            <div class="short-div4">BL-2-F-F-A2</div>
                                            <div class="short-div2" style="border-bottom:0px;">BL-F-2-F-F-A2</div>                                     -->
                                        </div>
                                    </div>
                                <?php }?>
                                  

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="section-top-border" style="margin-top:80px;">
                                <!-- <h3 class="mb-30">Table</h3> -->
                                <div class="progress-table-wrap">
                                    <div class="progress-table">                                    
                                        <div class="table-head" style="padding-bottom:10px;">
                                            <span href="#" class="genric-btn primary radius" style="margin-left:5px;" id="design" onclick="myfunc()">Design Feature & Options</span>
                                            <span href="#" class="genric-btn primary radius"  id="service">Service Application</span>
                                            <span href="#" class="genric-btn primary radius"  id="standard">Standard Compliance</span>
                                            <span href="#" class="genric-btn primary radius"  id="catalog">Download E-Catalog</span>                                                                                
                                        </div>
                                    <?php if($product==1){?>                                             
                                        <div class="table-row">
                                            <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="text-align:left;margin-left:15px;">                                                                                        
                                                <div style="text-align:left;margin-left:15px;" id="design_div1" class="content">
                                                    <ul class="unordered-list">
                                                        <li>High quality casting.</li>
                                                        <li>Fully interchangeable trim parts.</li>
                                                        <li>Blowout proof Stem.</li>                                                
                                                        <li>Renewable Seat & Seals.</li>
                                                        <li>Anti-Static Device.</li>
                                                        <li>Live-loaded design eliminates stem leakage while providing longer life cycle.</li>
                                                        <li>Bi-direction design for back flow application.</li>
                                                    </ul>                                                                                    
                                                    <h5>OPTIONS:</h5><h6>Vented ball to prevent seat damage caused by trapped cavity pressure.</h6>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:10px;" id="service_div1" class="content">
                                                    <h6>Chemical    |   Steam   |   Food Processing |   Thermal Fluids Oxygen   |   Vacuum  |   Water/Oil/Gas</h6>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="standard_div1" class="content">                                        
                                                    <h6><b>Design</b> : ASME B 16.34, BS EN ISO 17292</h6>
                                                    <h6><b>Pressure Test</b> :  API 598 / BS EN ISO 12266-1</h6>
                                                    <h6><b>End to End</b> : MEWPL’s Std.</h6>
                                                    <h6><b>End Conn.</b> : BSP’ll’- IS 554 / NPT-ASME B1.20.1</h6>
                                                    <h6><b>Material Certification</b> : DIN 50.049-3 1B</h6>
                                                    <h6><b>Quality Systems / Certifications</b> : ISO 9001</h6>                                                                                                                         
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
                                    <?php } else if($product==2) {?>
                                        <div class="table-row">
                                            <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="text-align:left;margin-left:15px;">                                                                                        
                                                <div style="text-align:left;margin-left:15px;" id="design_div2" class="content">
                                                    <ul class="unordered-list">                                                   
                                                        <li>High quality casting.</li>
                                                        <li>Fully interchangeable trim parts.</li>
                                                        <li>Firesafe to API 607 Std.</li>
                                                        <li>Blowout proof Stem.</li>
                                                        <li>Renewable Seat & Seals.</li>
                                                        <li>’O’ style body seal for better joint sealing & reusable (Standard valve) .</li>
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
                                                    </ul>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:10px;" id="service_div2" class="content">
                                                    <h6>Chemical    |   Steam   |   Food Processing |   Thermal Fluids Oxygen   |   Vacuum  |   Water/Oil/Gas</h6>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="standard_div2" class="content">                                        
                                                    <h6><b>Design</b> : ASME B 16.34, BS EN ISO 17292</h6>
                                                    <h6><b>Pressure Test</b> :  API 598 / BS EN ISO 12266-1</h6>
                                                    <h6><b>End to End</b> :ASME B 16.10</h6>
                                                    <h6><b>Flange Dimension</b> :  	ANSI B 16.5</h6>
                                                    <h6><b>Mounting Pad</b> :  	DIN 3337/ ISO 5211</h6>
                                                    <h6><b>Material Certification</b> : DIN 50.049-3 1B / Nace MR 01-75 compliant</h6>
                                                    <h6><b>Quality Systems / Certifications</b> : ISO 9001</h6>                                                                                                                         
                                                </div>
                                                <div style="text-align:center;margin-left:15px;word-spacing:10px;" id="catalog_div2" class="content">
                                                    <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="display:inline-block;">
                                                        <a href="<?php echo base_url('assets/').'product_pdf/Single_Piece_Design_Flange_End.pdf';?>" style="display:inherit;">
                                                            <div class="single-gallery-image" style="background: url(<?php echo base_url('assets/')?>/img/pdf_img/gen_single_flanged.jpg);width:250px;height:250px;displat:block;"></div>
                                                        </a>
                                                        <h6>For Detailed Dimension, Please Download E-Catalog</h6>
                                                    </div>                                                    
                                                </div>
                                            </div>                                        
                                        </div>
                                    <?php } else if($product==3) {?>
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
                                                    <h6>Chemical    |   Food Processing |   Oxygen  |   Water/Oil/Gas   |   Steam   |   Thermal Fluids  |   Vacuum</h6>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="standard_div3" class="content">                                        
                                                    <h6><b>Design</b> : ASME B 16.34, BS EN ISO 17292 & API 6D</h6>
                                                    <h6><b>Pressure Test</b> :  API 598 / BS EN ISO 12266-1 / API 6D</h6>
                                                    <h6><b>End to End</b> : ASME B 16.10 /API 6D.</h6>
                                                    <h6><b>Flange Dimension</b> :ANSI B 16.5</h6>
                                                    <h6><b>Mounting Pad</b> :  	DIN 3337/ ISO 5211</h6>
                                                    <h6><b>Material Certification</b> : DIN 50.049-3 1B / Nace MR 01-75 compliant</h6>
                                                    <h6><b>Quality Systems / Certifications</b> :   ISO 9001, API 6D</h6>                                                                                                                         
                                                </div>                                                                                                                                                                      
                                                <div style="text-align:center;margin-left:15px;word-spacing:10px;" id="catalog_div3" class="content">
                                                    <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="display:inline-block;">
                                                        <a href="<?php echo base_url('assets/').'product_pdf/Two_Piece_design_Flange_end.pdf';?>" style="display:inherit;">
                                                            <div class="single-gallery-image" style="background: url(<?php echo base_url('assets/')?>/img/pdf_img/gen_two_flange.jpg);width:250px;height:250px;displat:block;"></div>
                                                        </a>
                                                        <h6>For Detailed Dimension, Please Download E-Catalog</h6>
                                                    </div>                                                    
                                                </div>                                                
                                            </div>                                        
                                        </div>
                                    <?php } else if($product==4) {?>
                                        <div class="table-row">
                                            <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="text-align:left;margin-left:15px;">                                                                                        
                                                <div style="text-align:left;margin-left:15px;" id="design_div4" class="content">
                                                    <ul class="unordered-list">
                                                        <li>High quality casting.</li>
                                                        <li>Fully interchangeable trim parts.</li>
                                                        <li>Blowout proof Stem.</li>                                                
                                                        <li>Renewable Seat & Seals.</li>
                                                        <li>Anti-Static Device.</li>
                                                        <li>Live-loaded design eliminates stem leakage while providing longer life cycle.</li>
                                                        <li>Bi-direction design for back flow application.</li>
                                                    </ul>                                                                                    
                                                    <h5>OPTIONS:</h5><h6>Vented ball to prevent seat damage caused by trapped cavity pressure.</h6>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:10px;" id="service_div4" class="content">
                                                    <h6>Chemical    |   Steam   |   Food Processing |   Thermal Fluids Oxygen   |   Vacuum  |   Water/Oil/Gas</h6>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="standard_div4" class="content">                                        
                                                    <h6><b>Design</b> : ASME B 16.34, BS EN ISO 17292</h6>
                                                    <h6><b>Pressure Test</b> :  API 598 / BS EN ISO 12266-1</h6>
                                                    <h6><b>End to End</b> : MEWPL’s Std.</h6>
                                                    <h6><b>End Conn.</b> : BSP’ll’- IS 554 / NPT-ASME B1.20.1</h6>
                                                    <h6><b>Material Certification</b> : DIN 50.049-3 1B</h6>
                                                    <h6><b>Quality Systems / Certifications</b> : ISO 9001</h6>                                                                                                                         
                                                </div>
                                                <div style="text-align:center;margin-left:15px;word-spacing:10px;" id="catalog_div4" class="content">
                                                    <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="display:inline-block;">
                                                        <a href="<?php echo base_url('assets/').'product_pdf/Split_Body_Screwed_End.pdf';?>" style="display:inherit;">
                                                            <div class="single-gallery-image" style="background: url(<?php echo base_url('assets/')?>/img/pdf_img/gen_screwed.jpg);width:250px;height:250px;displat:block;"></div>
                                                        </a>
                                                        <h6>For Detailed Dimension, Please Download E-Catalog</h6>
                                                    </div>                                                    
                                                </div>
                                            </div>                                        
                                        </div>
                                    <?php } ?>     
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
        var div_design = $('#design_div<?php echo $product;?>');
        var div_service = $('#service_div<?php echo $product;?>');
        var div_standard = $('#standard_div<?php echo $product;?>');
        var div_catalog = $('#catalog_div<?php echo $product;?>');

        var design = $('#design');
        var service = $('#service');
        var standard = $('#standard');
        var catalog = $('#catalog');

        $(document).ready(function () {
            // alert("Hello Frends chai peelo");            
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