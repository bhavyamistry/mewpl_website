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
            
            //]]>
        </script>
</head>

<body>

    <!-- Preloader Start -->
    <!-- slider Area Start-->
    <div class="slider-area ">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="<?php echo base_url('assets/'); ?>img/banner/inquiry.png" style="width:100%;background-size:cover;">
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
                    <form class="form-contact contact_form" action="Enquiry/sendEnquiry" method="post" id="enquiryForm">
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
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="checkEmail();" value="" placeholder="Email" required><span id="error"></span>
                                </div>
                            </div>
                            <div class="add-pro" style="width:100%;">
                                <div class="col-12" id="pro_div1">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <img src="<?php echo base_url('assets/')?>img/products/img_icon.png" alt="" style="width:100%;" id="pro_img1">                                        
                                        </div>
                                        <div class="col-sm-4" style="display: grid;align-content: center;">
                                            <select class="form-control valid" style="width:100%;" id="product1" name="product1" onchange="productChange(this,1);" required>
                                                <option value="empty" selected disabled hidden>Select Product Category</option>
                                                <option value="General">General Purpose</option>
                                                <option value="Special">Special Purpose</option>
                                                <option value="GGC">Gate, Globe, Lift & Swing Check</option>
                                            </select>
                                            <input type="hidden" id="counter" name="counter" value="1">
                                        </div>
                                        <div class="col-sm-4" style="display: grid;align-content: center;">
                                            <select class="form-control valid" style="width:100%;" id="sub_pro1" name="sub_pro1" onchange="setimg(this,1);" required>
                                                <option value="empty" selected disabled hidden>Select Product</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-1" style="display: grid;align-content: center;">
                                            <div id="pro_div_but_1" class="plus-btn" style="border-radius: 8px;color:white;background-color:#ffcc2a;padding:25%;" onclick="duplicate(1);">
                                                <i class="ti-plus"></i>
                                            </div>
                                        </div>                                            
                                    </div>
                                </div>                                    
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Requirements'" placeholder=" Enter Requirements"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" class="button button-contactForm boxed-btn" value="Send" />
                            <input type="hidden" name="button_pressed" value="1" />
                            <input type="hidden" name="div_nos" id="div_nos" value="1," />
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
    <!-- ================ contact section end ================= -->
    <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="<?php echo base_url('assets/'); ?>js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
        <script type="text/javascript">
            
        </script>
		<script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/vendor/jquery-1.12.4.min.js"></script>
        <script type="text/javascript"> 
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var products = new Array(3);
            products["General"] = [
                {"name":"Select Product","selected":"0"},
                {"name":"Split Body Threaded End","selected":"0"}, 
                {"name":"Single Piece Flange End","selected":"0"}, 
                {"name":"Two Piece Flange End", "selected":"0"},
                {"name":"Three Piece Thread, SW , Flange End","selected":"0"}
            ]; 
            products["Special"] = [
                {"name":"Select Product","selected":"0"},
                {"name":"Jacketed","selected":"0"},
                {"name":"Trunnion Mounted","selected":"0"},
                {"name":"Extended Stem","selected":"0"},
                {"name":"Three Way Four Seated Threaded & Flanged","selected":"0"},
                {"name":"Three Way Two Seated L Port Flanged","selected":"0"},
                {"name":"Uni-directional Flush Bottom","selected":"0"}
            ]; 
            products["GGC"] = [
                {"name":"Select Product","selected":"0"},
                {"name":"Gate","selected":"0"},
                {"name":"Globe","selected":"0"},
                {"name":"Swing Check","selected":"0"},
                {"name":"Wafer Design Spring Loaded","selected":"0"},
                {"name":"Wafer Design Swing Check","selected":"0"},
                {"name":"Forged: Gate","selected":"0"},
                {"name":"Forged: Globe","selected":"0"},
                {"name":"Forged: Lift Check","selected":"0"}
            ]; 
            
            /* CountryChange() is called from the onchange event of a select element. 
            * param selectObj - the select object which fired the on change event. 
            */ 
            function productChange(selectObj,cnt) { 
                // get the index of the selected option 
                // var counter = document.getElementById("counter").value;
                var idx = selectObj.selectedIndex; 
                // get the value of the selected option 
                var which = selectObj.options[idx].value; 
                // use the selected option value to retrieve the list of items from the countryLists array 
                cList = products[which]; 
                // get the country select element via its known id 
                var cSelect = document.getElementById("sub_pro"+cnt); 
                // remove the current options from the country select 
                var len=cSelect.options.length; 
                while (cSelect.options.length > 0) { 
                    cSelect.remove(0); 
                } 
                var newOption; 
                // create new options 
                for (var i=0; i<cList.length; i++) { 
                    newOption = document.createElement("option"); 
                    newOption.value = cList[i].name;  // assumes option string and value are the same 
                    newOption.text= cList[i].name; 
                // add the new option 
                    try { 
                        cSelect.add(newOption);
                          // this will fail in DOM browsers but is needed for IE 
                    } 
                    catch (e) { 
                        cSelect.appendChild(newOption); 
                    }
                    if(cList[i].selected!="0")
                    {
                        cSelect.options[i].disabled = true;
                    }
                } 
                cSelect.options[0].disabled = true;
                cSelect.options[0].selected = true; 
                cSelect.options[0].hidden = true;
                cSelect.options[0].value = "empty";
            }
            
            function duplicate(cnt) {
                var pro = document.getElementById("product"+cnt).value;
                var sub = document.getElementById("sub_pro"+cnt).value;
                var nos = document.getElementById("div_nos").value;
                
                alert(pro+" "+sub);
                if(pro == "empty")
                {
                    $('#product'+cnt).valid();
                }
                else if(sub == "empty")
                {
                    $('#sub_pro'+cnt).valid();
                }
                else
                {
                    var counter = document.getElementById("counter").value;
                    $('#div_nos').val($('#div_nos').val()+(cnt+1)+",");
                    alert($('#div_nos').val());
                    // alert(counter);
                    $('#pro_div_but_'+counter).css("visibility", "hidden");
                    var original = document.getElementById("pro_div" + counter);
                    var clone = original.cloneNode(true); // "deep" clone
                    var i = parseInt(counter) + parseInt(1);
                    clone.id = "pro_div" +i; // there can only be one element with an ID
                    $('.add-pro').append('<div class="col-12" id="pro_div'+i+'"><div class="row"><div class="col-sm-2"><img src="<?php echo base_url("assets/")?>img/products/img_icon.png" id="pro_img'+(i)+'" alt="" style="width:100%;"></div><div class="col-sm-4" style="display: grid;align-content: center;"><select class="form-control valid" style="width:100%;" id="product'+(i)+'" name="product'+(i)+'" onchange="productChange(this,'+(i)+');" required><option value="empty" selected disabled hidden>Select Product Category</option><option value="General">General Purpose</option><option value="Special">Special Purpose</option><option value="GGC">Gate, Globe, Lift & Swing Check</option></select></div><div class="col-sm-4" style="display: grid;align-content: center;"><select class="form-control valid" onchange="setimg(this,'+(i)+');" style="width:100%;" id="sub_pro'+(i)+'" name="sub_pro'+(i)+'" required><option value="empty" selected disabled hidden>Select Product</option></select></div><div class="col-sm-1" style="display: grid;align-content: center;"><div id="pro_div_but_'+i+'" class="plus-btn" style="border-radius: 8px;color:white;background-color:#ffcc2a;padding:25%;" onclick="duplicate('+i+');"><i class="ti-plus"></i></div></div><div class="col-sm-1" style="display: grid;align-content: center;"><div class="plus-btn" style="border-radius: 8px;color:white;background-color:red;padding:25%;" onclick="remove_duplicate('+i+');"><i class="ti-minus"></i></div></div></div></div>');
                    document.getElementById("counter").value = i;
                    objIndex = products[pro].findIndex((obj => obj.name == sub ));
                    // alert("Index:"+objIndex);                    
                    products[pro][objIndex].selected = cnt;
                    // console.log(products[pro]);
                }
                
            }

            function setimg(sel,ind) {
                // alert(sel.id);
                // alert(sel.value);
                // alert(ind);
                var path="";
                var pro = document.getElementById("product"+ind).value;
                const objIndex = products[pro].findIndex(obj => obj.name == sel.value);
                alert(objIndex);
                alert(products[pro][objIndex].name);
                if(pro == "General")
                {
                    if(objIndex==1) {
                        path="general_purpose/gp_screwed.jpg";
                    }
                    else if(objIndex==2) {
                        path="general_purpose/gp_single_flange.png";
                    }
                    else if(objIndex==3) {
                        path="general_purpose/gp_two_flange.jpg";
                    }
                    else if(objIndex==4) {
                        path="general_purpose/gp_three_side.jpg";
                    }
                }
                else if(pro == "Special")
                {
                    if(objIndex==1) {
                        path="special_purpose/sp_jacket.png";
                    }
                    else if(objIndex==2) {
                        path="special_purpose/sp_trunion.png";
                    }
                    else if(objIndex==3) {
                        path="special_purpose/sp_extended.png";
                    }
                    else if(objIndex==4) {
                        path="special_purpose/sp_4seat_flange.png";
                    }
                    else if(objIndex==5) {
                        path="special_purpose/sp_2seat_flange.png";
                    }
                    else if(objIndex==6) {
                        path="special_purpose/sp_flush.png";
                    }                   
                }
                else if(pro == "GGC")
                {
                    if(objIndex==1) {
                        path="check_valve/ch_gate.jpg";
                    }
                    else if(objIndex==2) {
                        path="check_valve/ch_globe.jpg";
                    }
                    else if(objIndex==3) {
                        path="check_valve/ch_swingchk.jpg";
                    }
                    else if(objIndex==4) {
                        path="check_valve/ch_wafer_load.jpg";
                    }
                    else if(objIndex==5) {
                        path="check_valve/ch_wafer_swingchk.jpg";;
                    }
                    else if(objIndex==6) {
                        path="check_valve/ch_forged_gate.jpg";
                    }
                    else if(objIndex==7) {
                        path="check_valve/ch_forged_globe.jpg";
                    }
                    else if(objIndex==8) {
                        path="check_valve/ch_forged_lift.jpg";
                    }                   
                }
                $('#pro_img'+ind).attr('src','<?php echo base_url('assets/')?>img/products/'+path);                
            }

            function remove_duplicate(cnt) {
                var pro = document.getElementById("product"+cnt).value;
                var sub = document.getElementById("sub_pro"+cnt).value;
                var nos = $('#div_nos').val();
                var nos_arr = nos.split(',');
                console.log(nos_arr);
                nos_arr.splice(nos_arr.indexOf(cnt.toString()),1);
                console.log(nos_arr);
                $('#div_nos').val(nos_arr);
                var counter = cnt;
                // alert("remove"+counter);
                $('#pro_div'+counter).remove();
                var i = parseInt(counter) - parseInt(1);
                document.getElementById("counter").value = i;
                $('#pro_div_but_'+i).css("visibility", "visible");
                objIndex = products[pro].findIndex((obj => obj.name == sub ));
                // alert("Index:"+objIndex);                    
                products[pro][objIndex].selected = "0";
            }
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
                                if(status == "success")
                                {
                                    alert(data); 
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