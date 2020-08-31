<!doctype html>
<html class="no-js" lang="zxx">
<?php
    $pro_num = 1;
    if(isset($_GET['er']))
    {
        $err_no = $_GET['er'];
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
        <script type="text/javascript">
            //<![CDATA[ 
            // array of possible countries in the same order as they appear in the country selection list 
            var products = new Array(4); 
            products["empty"] = ["Select a Product"]; 
            products["General"] = ["Select Sub Product","Split Body Threaded End", "Single Piece Flange End", "Two Piece Flange End",'Three Piece Thread, SW , Flange End']; 
            products["Special"] = ["Jacketed", "Trunnion Mounted", "Extended Stem", "Three Way Four Seated Threaded & Flanged","Three Way Two Seated L Port Flanged","Uni-directional Flush Bottom"]; 
            products["GGC"] = ["Gate", "Globe", "Swing Check","Wafer Design Spring Loaded","Wafer Design Swing Check","Forged: Gate","Forged: Globe","Forged: Lift Check"]; 
            
            /* CountryChange() is called from the onchange event of a select element. 
            * param selectObj - the select object which fired the on change event. 
            */ 
            function productChange(selectObj) { 
                // get the index of the selected option 
                var idx = selectObj.selectedIndex; 
                // get the value of the selected option 
                var which = selectObj.options[idx].value; 
                // use the selected option value to retrieve the list of items from the countryLists array 
                cList = products[which]; 
                // get the country select element via its known id 
                var cSelect = document.getElementById("sub_pro"+counter); 
                // remove the current options from the country select 
                var len=cSelect.options.length; 
                while (cSelect.options.length > 0) { 
                    cSelect.remove(0); 
                } 
                var newOption; 
                // create new options 
                for (var i=0; i<cList.length; i++) { 
                    newOption = document.createElement("option"); 
                    newOption.value = cList[i];  // assumes option string and value are the same 
                    newOption.text=cList[i]; 
                // add the new option 
                    try { 
                        cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
                    } 
                    catch (e) { 
                        cSelect.appendChild(newOption); 
                    }
                    cSelect.options[0].disabled = true;
                    cSelect.options[0].selected = true; 
                    cSelect.options[0].hidden = true;
                } 
            }

            var counter = <?php echo $pro_num;?>;
            function duplicate() {
                alert(counter);
                var original = document.getElementById("pro_div" + counter);
                var clone = original.cloneNode(true); // "deep" clone
                var i = parseInt(counter) + parseInt(1);
                clone.id = "pro_div" +i; // there can only be one element with an ID
                var i = parseInt(counter) + parseInt(1);
                $('.add-pro').append('<div class="col-12" id="pro_div'+i+'"><div class="row"><div class="col-sm-2"><img src="<?php echo base_url("assets/")?>img/products/general_purpose/gp_screwed.jpg" alt="" style="width:100%;"></div><div class="col-sm-4" style="display: grid;align-content: center;"><select class="form-control valid" style="width:100%;" id="product'+(i)+'" name="product'+(i)+'" onchange="productChange(this);" required><option value="empty" selected disabled hidden>Select Product</option><option value="General">General Purpose</option><option value="Special">Special Purpose</option><option value="GGC">Gate, Globe, Lift & Swing Check</option></select></div><div class="col-sm-4" style="display: grid;align-content: center;"><select class="form-control valid" style="width:100%;" id="sub_pro'+(i)+'" name="sub_pro'+(i)+'" required><option id="0">Select Product</option></select></div><div class="col-sm-1" style="display: grid;align-content: center;"><div clas="plus-btn" style="border-radius: 8px;color:white;background-color:#ffcc2a;padding:25%;" onclick="duplicate();"><i class="ti-plus"></i></div></div><div class="col-sm-1" style="display: grid;align-content: center;"><div clas="plus-btn" style="border-radius: 8px;color:white;background-color:red;padding:25%;" onclick="remove_duplicate();"><i class="ti-minus"></i></div></div></div></div>');
                $('#counter').val(i);
                <?php $pro_num = $pro_num+1;?>
                
            }
            //]]>
        </script>
</head>

<body>

    <!-- Preloader Start -->
    <!-- slider Area Start-->
    <div class="slider-area ">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="<?php echo base_url('assets/'); ?>img/banner/contact_us.png" style="width:100%;background-size:cover;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap pt-100">
                            <h2>Product Enquiry</h2>
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
    </div>
    <!-- slider Area End-->
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <h2 class="contact-title">Enquiry</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" method="post" id="contactForm">
                            <div class="row">                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="bname" id="bname" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Company name'" placeholder="Enter your Company name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="num" id="num" type="text" oninput="numberOnly(this.id);" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your phone number'" placeholder="Enter your phone number" maxlength="10" minlength="10" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" required>
                                    </div>
                                </div>
                                <div >
                                <div class="add-pro">
                                    <div class="col-12" id="pro_div1">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <img src="<?php echo base_url('assets/')?>img/products/general_purpose/gp_screwed.jpg" alt="" style="width:100%;">                                        
                                            </div>
                                            <div class="col-sm-4" style="display: grid;align-content: center;">
                                                <select class="form-control valid" style="width:100%;" id="product1" name="product1" onchange="productChange(this);" required>
                                                    <option value="empty" selected disabled hidden>Select Product</option>
                                                    <option value="General">General Purpose</option>
                                                    <option value="Special">Special Purpose</option>
                                                    <option value="GGC">Gate, Globe, Lift & Swing Check</option>
                                                </select>
                                                <input type="hidden" id="counter" name="hidden-amt" value="0" readonly>
                                            </div>
                                            <div class="col-sm-4" style="display: grid;align-content: center;">
                                                <select class="form-control valid" style="width:100%;" id="sub_pro1" name="sub_pro1" required>
                                                    <option id="0">Select Product</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-1" style="display: grid;align-content: center;">
                                                <div id="pro_div_but_1" class="plus-btn" style="border-radius: 8px;color:white;background-color:#ffcc2a;padding:25%;" onclick="duplicate();">
                                                    <i class="ti-plus"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Requirement'" placeholder=" Enter Requirement" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" class="button button-contactForm boxed-btn" value="Send" />
                                <input type="hidden" name="button_pressed" value="1" />
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
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
                    </div>
                </div>
            </div>
        </section>
        
        <?php 
            $_SESSION = [];
            if (isset($_POST['button_pressed'])) { 
                session_start();
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['bname'] = $_POST['bname'];
                $_SESSION['message'] = $_POST['message'];
                $_SESSION['num'] = $_POST['num'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['subject'] = $_POST['subject'];
                header('Location: '.base_url().'Contact/sendMail');
                
            } 
        ?> 
    <!-- ================ contact section end ================= -->
    <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="<?php echo base_url('assets/'); ?>js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
        <script type="text/javascript">
            
        </script>
		<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/vendor/jquery-1.12.4.min.js"></script>
        <script type="text/javascript"> 
            

            $(document).ready(function(){
                alert("Loaded");
                // function getpro(sel){
                //     alert("Value changed");
                //     var selectedproduct = sel. val();
                //     if(selectedproduct=="pro1")
                //     { 
                //         $('#selectBox').append($('<option>').val(optionValue).text(optionText))
                //         $('#sub_pro').append('<option value="Split Body Threaded End">Split Body Threaded End</option>'); 
                //         $('#sub_pro').append('<option value="Single Piece Flange End">Single Piece Flange End</option>'); 
                //         $('#sub_pro').append('<option value="Two Piece Flange End">Two Piece Flange End</option>'); 
                //         $('#sub_pro').append('<option value="Three Piece Thread, SW , Flange End">Three Piece Thread, SW , Flange End</option>'); 
                //     }
                // }
            });

            function numberOnly(id) {
                // Get element by id which passed as parameter within HTML element event
                var element = document.getElementById(id);
                // Use numbers only pattern, from 0 to 9
                var regex = /[^0-9]/gi;
                // This removes any other character but numbers as entered by user
                element.value = element.value.replace(regex, "");
            }
            $(document).ready(function(){
                $('#contactForm').on('submit',function(e) {
                    $.ajax({
                        url: <?= base_url().'Contact/sendMail'?>,
                        data: $(this).serialize(),
                        dataType: "json",
                        type: 'POST',
                        success: function(data) {
                            console.log(data);
                             // Display the data on the current screen.
                            $('#form')[0].reset(); // reset the form so the user doesn't double click and submit the data twice
                        }
                    });
                    e.preventDefault();
                });

            });            
        </script>
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
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="<?php echo base_url('assets/'); ?>js/jquery.scrollUp.min.js"></script>
        <!-- <script src="<?php //echo base_url('assets/'); ?>js/jquery.nice-select.min.js"></script> -->
		<script src="<?php echo base_url('assets/'); ?>js/jquery.sticky.js"></script>
        <script src="<?php echo base_url('assets/'); ?>js/jquery.magnific-popup.js"></script>

        <!-- contact js -->
        <!-- <script src="<?php //echo base_url('assets/'); ?>js/contact.js"></script> -->
        <!-- <script src="<?php echo base_url('assets/'); ?>js/jquery.form.js"></script> -->
        <script src="<?php echo base_url('assets/'); ?>js/jquery.validate.min.js"></script>
        <script src="<?php echo base_url('assets/'); ?>js/mail-script.js"></script>
        <script src="<?php echo base_url('assets/'); ?>js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="<?php echo base_url('assets/'); ?>js/plugins.js"></script>
        <script src="<?php echo base_url('assets/'); ?>js/main.js"></script>
        
    </body>
    
    </html>