<!doctype html>
<html class="no-js" lang="zxx">
<?php
    $product = $_GET['product'];
    $product_det = '';
    $product_name = '';
    if($product=='1')
    {
        $product_name = 'Wafer Type Butter Fly Valve (Centric)';
        $product_det = array("name"=>"Wafer Type Butter Fly Valve (Centric)",
        "img"=>"img/products/butterfly_valves/Centric_0.png",
        "desc"=>"Offers Rubber Lined-Butterfly Valves in a variety of pressure classes, body styles, materials, and actuation options to meet requirements in process and utility.<br>
        They are designed with moulded integral elastomer seat that provides better performance and longer service life compared to valves with loose liners.<br>
        Butterfly valves are generally used in low pressure system application in Noncritical areas. They are normally used in large diameter lines. They have an extremely low pressure drop and are relatively light weight. Also, the face dimension is usually quite small. The diameter of the valve can be of the same order as the diameter of the connecting pipes.",
        );
    }
    elseif($product=='2')
    {
        $product_name = 'Wafer Type Butter Fly Valve (Ecentric)';
        $product_det = array("name"=>"Wafer Type Butter Fly Valve (Ecentric)",
        "img"=>"img/products/butterfly_valves/Eccentric_4.png",
        "desc"=>"Offers Rubber Lined-Butterfly Valves in a variety of pressure classes, body styles, materials, and actuation options to meet requirements in process and utility.<br>
        They are designed with moulded integral elastomer seat that provides better performance and longer service life compared to valves with loose liners.<br>
        Butterfly valves are generally used in low pressure system application in Noncritical areas. They are normally used in large diameter lines. They have an extremely low pressure drop and are relatively light weight. Also, the face dimension is usually quite small. The diameter of the valve can be of the same order as the diameter of the connecting pipes.",
        );
    }
    elseif($product=='3')
    {
        $product_name = 'Lug Type Butter Fly Valve';
        $product_det = array("name"=>"Lug Type Butter Fly Valve",
        "img"=>"img/products/butterfly_valves/Lugtype_1.jpg",
        "desc"=>"Offers Rubber Lined-Butterfly Valves in a variety of pressure classes, body styles, materials, and actuation options to meet requirements in process and utility.<br>
        They are designed with moulded integral elastomer seat that provides better performance and longer service life compared to valves with loose liners.<br>
        Butterfly valves are generally used in low pressure system application in Noncritical areas. They are normally used in large diameter lines. They have an extremely low pressure drop and are relatively light weight. Also, the face dimension is usually quite small. The diameter of the valve can be of the same order as the diameter of the connecting pipes.",
        );
    }
    elseif($product=='4')
    {
        $product_name = 'Double Flanged Butterfly Valve (Centric)';
        $product_det = array("name"=>"Double Flanged Butterfly Valve (Centric)",
        "img"=>"img/products/butterfly_valves/db_flanged_centric.jpg",
        "desc"=>"Offers Rubber Lined-Butterfly Valves in a variety of pressure classes, body styles, materials, and actuation options to meet requirements in process and utility.<br>
        They are designed with moulded integral elastomer seat that provides better performance and longer service life compared to valves with loose liners.<br>
        Butterfly valves are generally used in low pressure system application in Noncritical areas. They are normally used in large diameter lines. They have an extremely low pressure drop and are relatively light weight. Also, the face dimension is usually quite small. The diameter of the valve can be of the same order as the diameter of the connecting pipes.",
        );
    }
    elseif($product=='5')
    {
        $product_name = 'Double Flanged Fabricated Butterfly Valve (offset)';
        $product_det = array("name"=>"Double Flanged Fabricated Butterfly Valve (offset)",
        "img"=>"img/products/butterfly_valves/db_flangedEccentric.jpg",
        "desc"=>"Offers Rubber Lined-Butterfly Valves in a variety of pressure classes, body styles, materials, and actuation options to meet requirements in process and utility.<br>
        They are designed with moulded integral elastomer seat that provides better performance and longer service life compared to valves with loose liners.<br>
        Butterfly valves are generally used in low pressure system application in Noncritical areas. They are normally used in large diameter lines. They have an extremely low pressure drop and are relatively light weight. Also, the face dimension is usually quite small. The diameter of the valve can be of the same order as the diameter of the connecting pipes.",
        );
    }
    else{
        redirect(base_url().'Err404');
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
            <div class="container" id="body">
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
                                            <?php if($product==1){?>                                                
                                                <li><img src="<?php echo base_url('assets/');?>img/products/butterfly_valves/Centric_1.jpg"/></li>
                                                <li><img src="<?php echo base_url('assets/');?>img/products/butterfly_valves/Centric_2.jpg"/></li>
                                                <li><img src="<?php echo base_url('assets/');?>img/products/butterfly_valves/Centric_3.jpg"/></li>
                                                <li><img src="<?php echo base_url('assets/');?>img/products/butterfly_valves/Centric_3_0.png"/></li>
                                            <?php } else if($product==2){?>
                                                <li><img src="<?php echo base_url('assets/');?>img/products/butterfly_valves/Eccentric_2.jpg"/></li>
                                            <?php } else if($product==3){?>
                                                <li><img src="<?php echo base_url('assets/');?>img/products/butterfly_valves/Lugtype_2.jpg"/></li>
                                                <li><img src="<?php echo base_url('assets/');?>img/products/butterfly_valves/Lugtype_3.jpg"/></li>
                                            <?php } else if($product==4){?>
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
                                    <blockquote class="generic-blockquote" style="text-align: initial;"><h5><b>MEWPL </b><?php echo $product_det['desc'];?><h5></blockquote>
                                        <div class="col-md-2" style="margim-top:5%;">
                                            <button href="#" class="btn" data-toggle="modal" data-target="#popUpWindow">Enquire</button>
                                        </div>
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
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="section-top-border" style="margin-top:80px;">
                                <!-- <h3 class="mb-30">Table</h3> -->
                                <div class="progress-table-wrap">
                                    <div class="progress-table">                                    
                                        <div class="table-head" style="padding-bottom:10px;">
                                            <span href="#" class="genric-btn primary radius" style="margin-left:5px;" id="design" onclick="myfunc()">Specifications</span>
                                            <span href="#" class="genric-btn primary radius"  id="service">Service Application</span>
                                            <span href="#" class="genric-btn primary radius"  id="standard">Standard Compliance</span>
                                            <span href="#" class="genric-btn primary radius"  id="catalog">Download E-Catalog</span>                                                                                
                                        </div>
                                    <?php if($product==1){?>                                             
                                        <div class="table-row">
                                            <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="text-align:left;margin-left:15px;">                                                                                        
                                                <div style="text-align:left;margin-left:15px;" id="design_div1" class="content">
                                                    <ul class="unordered-list">
                                                        <li><h6><b>Type of Valve</b> : Centric Disc Butterfly Valve with Rubber Lined Body</h6></li>
                                                        <li><h6><b>Body Type</b> : Single Piece, Short Wafer</h6></li>
                                                        <li><h6><b>Seat Type</b> : Integrally bonded</h6></li>
                                                        <li><h6><b>Size Range</b> : DN 40 TO DN 900</h6></li>
                                                        <li><h6><b>Pressure Rating</b> : PN 6 (DN 650 TO DN 1200) / PN 10 & PN 16 (DN 50 TO DN 600)</h6></li>
                                                        <li><h6><b>Operating Temperature Range</b> : -25°C to 200°C (Depending on MOC)</h6></li>
                                                        <li><h6><b>Seat leakage performance</b> : Tight Shut off</h6></li>
                                                        <li><h6><b>Operation</b> :  Hand Leaver/ Worm Gear Operation- Optional Electrical / Pneumatic actuator operation - Optional</h6></li>
                                                    </ul>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:10px;" id="service_div1" class="content">
                                                    <h6>Chemical    |   Steam   |   Food Processing |   Thermal Fluids Oxygen   |   Vacuum  |   Water/Oil/Gas</h6>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="standard_div1" class="content">                                        
                                                    <h6><b>General Design and Manufacturer</b> : BS 5155 / API 609 / EN 593 / IS 13095</h6>
                                                    <h6><b>Valve Face to Face Dimension</b> : BS 5155 / ISO 5752 / API 609</h6>
                                                    <h6><b>Top Flange Drilling</b> :  ISO 5211</h6>
                                                    <h6><b>Valve Inspection and Testing</b> : BS 6755 Part - I / API 598 / EN 12266-1</h6>
                                                    <h6><b>Flange Standard Conformity</b> : ANSI 150 / ANSI 125 / BS 10 TAB D & E</h6>
                                                    <h6><b></b> :  IS 6392 NP 0.6 / 1.0 /1.6</h6>                                                                                                                         
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
                                                        <li><h6><b>Type of Valve</b> : Double Ecentric Disc Butterfly Valve Body</h6></li>
                                                        <li><h6><b>Body Type</b> : Single Piece, Short Wafer</h6></li>
                                                        <li><h6><b>Seat Type</b> : Replaceable, PTFE Seat & Rubber Seat</h6></li>
                                                        <li><h6><b>Size Range</b> : DN 40 TO DN 600</h6></li>
                                                        <li><h6><b>Pressure Rating</b> : PN 6 (DN 650 TO DN 1200) / PN 10 & PN 16 (DN 50 TO DN 600)</h6></li>
                                                        <li><h6><b>Operating Temperature Range</b> : -25°C to 200°C (Depending on MOC)</h6></li>
                                                        <li><h6><b>Seat leakage performance</b> : Tight Shut off</h6></li>
                                                        <li><h6><b>Operation</b> :  Hand Leaver/ Worm Gear Operation- Optional Electrical / Pneumatic actuator operation - Optional</h6></li>
                                                    </ul>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:10px;" id="service_div2" class="content">
                                                    <h6>Chemical    |   Steam   |   Food Processing |   Thermal Fluids Oxygen   |   Vacuum  |   Water/Oil/Gas</h6>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="standard_div2" class="content">                                        
                                                    <h6><b>General Design and Manufacturer</b> : API 609</h6>
                                                    <h6><b>Valve Face to Face Dimension</b> : BS 5155 / API 609 Category B</h6>
                                                    <h6><b>Top Flange Drilling</b> : ISO 5211</h6>
                                                    <h6><b>Valve Inspection and Testing</b> :  API 598 / BS 6755 Part-I / EN 12266-1</h6>
                                                    <h6><b>Flange Standard Conformity</b> :  ANSI 150 / IS 6392 NP 1.0 /1.6</h6>
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
                                                        <li><h6><b>Type of Valve</b> : Centric Disc Butterfly Valve with Rubber Lined Body</h6></li>
                                                        <li><h6><b>Body Type</b> :  Single Piece,Wafer Lugged</h6></li>
                                                        <li><h6><b>Seat Type</b> : Integrally bonded, replaceable</h6></li>
                                                        <li><h6><b>Size Range</b> : DN 40 TO DN 600</h6></li>
                                                        <li><h6><b>Pressure Rating</b> : PN 6 (DN 650 TO DN 1200) / PN 10 & PN 16 (DN 50 TO DN 600)</h6></li>
                                                        <li><h6><b>Operating Temperature Range</b> : -25°C to 200°C (Depending on MOC)</h6></li>
                                                        <li><h6><b>Seat leakage performance</b> : Tight Shut off</h6></li>
                                                        <li><h6><b>Operation</b> :   Hand Leaver/ Worm Gear Operation- Optional Electrical / Pneumatic actuator operation - Optional</h6></li>
                                                    </ul>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:10px;" id="service_div3" class="content">
                                                    <h6>Chemical    |   Food Processing |   Oxygen  |   Water/Oil/Gas   |   Steam   |   Thermal Fluids  |   Vacuum</h6>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="standard_div3" class="content">                                        
                                                    <h6><b>General Design and Manufacturer</b> : API 609</h6>
                                                    <h6><b>Valve Face to Face Dimension</b> : API 609</h6>
                                                    <h6><b>Top Flange Drilling</b> : ISO 5211</h6>
                                                    <h6><b>Valve Inspection and Testing</b> :  API 598</h6>
                                                    <h6><b>Flange Standard Conformity</b> :   ANSI 150 / IS 6392 NP 1.0 /1.6</h6>
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
                                                        <li><h6><b>Type of Valve</b> : Double Centric Disc Butterfly Valve with Rubber Lined Body</h6></li>
                                                        <li><h6><b>Body Type</b> :   Single Piece,Double Flanged</h6></li>
                                                        <li><h6><b>Seat Type</b> :  Integrally bonded</h6></li>
                                                        <li><h6><b>Size Range</b> : DN 40 TO DN 700</h6></li>
                                                        <li><h6><b>Pressure Rating</b> :  PN 6 (DN 650 TO DN 1200) / PN 10 & PN 16 (DN 50 TO DN 600)</h6></li>
                                                        <li><h6><b>Operating Temperature Range</b> :  -25°C to 200°C (Depending on MOC)</h6></li>
                                                        <li><h6><b>Seat leakage performance</b> : Tight Shut off</h6></li>
                                                        <li><h6><b>Operation</b> :  Hand Leaver/ Worm Gear Operation- Optional Electrical / Pneumatic actuator operation - Optional</h6></li>
                                                    </ul>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:10px;" id="service_div4" class="content">
                                                    <h6>Chemical    |   Steam   |   Food Processing |   Thermal Fluids Oxygen   |   Vacuum  |   Water/Oil/Gas</h6>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="standard_div4" class="content">                                        
                                                    <h6><b>General Design and Manufacturer</b> :    BS 5155 / API 609 / EN 593 / IS 13095</h6>
                                                    <h6><b>Valve Face to Face Dimension</b> :   BS 5155 / ISO 5752 / API 609</h6>
                                                    <h6><b>Top Flange Drilling</b> :    ISO 5211</h6>
                                                    <h6><b>Valve Inspection and Testing</b> :   API 598 / BS 6755 Part-I / EN 12266-1</h6>
                                                    <h6><b>Flange Standard Conformity</b> :   ANSI 150 / ANSI 125 / BS 10 TAB D & E</h6>
                                                    <h6><b></b> :   IS 6392 NP 0.6 / 1.0 /1.6</h6>
                                                </div>
                                                <div style="text-align:center;margin-left:15px;word-spacing:10px;" id="catalog_div4" class="content">
                                                    <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="display:inline-block;">
                                                        <a href="<?php echo base_url('assets/').'product_pdf/Three_piece_Screwed_SW_&_Flange_ends.pdf';?>" style="display:inherit;">
                                                            <div class="single-gallery-image" style="background: url(<?php echo base_url('assets/')?>/img/pdf_img/gen_three_flange.jpg);width:250px;height:250px;displat:block;"></div>
                                                        </a>
                                                        <h6>For Detailed Dimension, Please Download E-Catalog</h6>
                                                    </div>                                                    
                                                </div>
                                            </div>                                        
                                        </div>
                                    <?php } else if($product==5) {?>
                                        <div class="table-row">
                                            <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="text-align:left;margin-left:15px;">
                                                <div style="text-align:left;margin-left:15px;" id="design_div5" class="content">
                                                    <ul class="unordered-list">
                                                        <li><h6><b>Type of Valve</b> : Ecentric Disc Fabricated Butterfly Valve Body</h6></li>
                                                        <li><h6><b>Body Type</b> :   Single Piece,Double Flanged</h6></li>
                                                        <li><h6><b>Seat Type</b> :  Replaceable</h6></li>
                                                        <li><h6><b>Size Range</b> : DN 600 TO DN 1600</h6></li>
                                                        <li><h6><b>Pressure Rating</b> :  PN 6 & PN 10 (DN 600 TO DN 1600)</h6></li>
                                                        <li><h6><b>Operating Temperature Range</b> :   -25°C to 200°C (Depending on MOC)/h6></li>
                                                        <li><h6><b>Seat leakage performance</b> : Tight Shut off</h6></li>
                                                        <li><h6><b>Operation</b> :   Worm Gear / Electrical / Pneumatic actuator operation - Optional</h6></li>
                                                    </ul>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:10px;" id="service_div5" class="content">
                                                    <h6>Chemical    |   Steam   |   Food Processing |   Thermal Fluids Oxygen   |   Vacuum  |   Water/Oil/Gas</h6>
                                                </div>
                                                <div style="text-align:left;margin-left:15px;word-spacing:5px;" id="standard_div5" class="content">                                        
                                                    <h6><b>General Design and Manufacturer</b> :    AWWA C-504</h6>
                                                    <h6><b>Valve Face to Face Dimension</b> :   AWWA C-504</h6>
                                                    <h6><b>Top Flange Drilling</b> :    ISO 5211</h6>
                                                    <h6><b>Valve Inspection and Testing</b> :   AWWA C-504</h6>
                                                    <h6><b>Flange Standard Conformity</b> :   ANSI 150 / ANSI 125 / BS 10 TAB D & E</h6>
                                                    <h6><b></b> :   IS 6392 NP 0.6 / 1.0 / 1.6</h6>
                                                </div>
                                                <div style="text-align:center;margin-left:15px;word-spacing:10px;" id="catalog_div5" class="content">
                                                    <div class="col-lg-12 col-md-12 col-sm-5 table-contents" style="display:inline-block;">
                                                        <a href="<?php echo base_url('assets/').'product_pdf/Three_piece_Screwed_SW_&_Flange_ends.pdf';?>" style="display:inherit;">
                                                            <div class="single-gallery-image" style="background: url(<?php echo base_url('assets/')?>/img/pdf_img/gen_three_flange.jpg);width:250px;height:250px;displat:block;"></div>
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
                        <div class="section-top-border" style="padding:inherit;margin-top:5%;">
                            <h3 class="mb-30">Seat Temperature Range</h3>
                            <div class="progress-table-wrap">
                                <div class="progress-table">
                                    <div class="table-head">              
                                        <div class="seat" style="display:grid;align-items:center;">Seat Type</div>                                            
                                        <div class="temp_head">Temperature range
                                            <div class="row">
                                                <div class="temp_head_row">Min.</div>
                                                <div class="temp_head_row">Max.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="seat table-contents" style="text-align:center">NITRILE</div>
                                        <div class="temp_head table-contents" style="text-align:center">
                                            <div class="row">
                                                <div class="temp_head_row table-contents" style="text-align:center">-13°F (-25°C)</div>
                                                <div class="temp_head_row table-contents" style="text-align:center">212°F (100°C)</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="seat table-contents" style="text-align:center">EPDM</div>
                                        <div class="temp_head table-contents" style="text-align:center">
                                            <div class="row">
                                                <div class="temp_head_row table-contents" style="text-align:center">-13°F (-25°C)</div>
                                                <div class="temp_head_row table-contents" style="text-align:center">250°F (120°C)</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="seat table-contents" style="text-align:center">SILICON</div>
                                        <div class="temp_head table-contents" style="text-align:center">
                                            <div class="row">
                                                <div class="temp_head_row table-contents" style="text-align:center">-58°F (-50°C)</div>
                                                <div class="temp_head_row table-contents" style="text-align:center">356°F (180°C)</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="seat table-contents" style="text-align:center">VITON</div>
                                        <div class="temp_head table-contents" style="text-align:center">
                                            <div class="row">
                                                <div class="temp_head_row table-contents" style="text-align:center">-23°F (-5°C)</div>
                                                <div class="temp_head_row table-contents" style="text-align:center">392°F (200°C)</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="seat table-contents" style="text-align:center">HYPALON</div>
                                        <div class="temp_head table-contents" style="text-align:center">
                                            <div class="row">
                                                <div class="temp_head_row table-contents" style="text-align:center">-4°F (-20°C)</div>
                                                <div class="temp_head_row table-contents" style="text-align:center">250°F (120°C)</div>
                                            </div>
                                        </div>
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
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
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
            setTimeout(function(){
                $("#body").show();
                $("#preloader-active").hide();
            }, 1000);
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