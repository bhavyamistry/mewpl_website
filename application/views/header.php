<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo base_url('assets/'); ?>img/logo/loader.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent" id="head" >
            <div class="main-header ">
                <div class="header-top d-none d-lg-block">
                    <div class="container-fluid">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li>+ 91-22-26859960 / 42523200</li>
                                        <li>sales@saturnvalves.com</li>
                                        <li>Mon - Sat 8:00 - 17:30, Sunday - CLOSED</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">                                        
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li> <a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li> <a href="#"><i class="fas fa-map-marker-alt"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo"  style="width:90%;">
                                    <!-- logo-1 -->
                                    <a href="<?php echo base_url().'Home'; ?>" class="big-logo"><img src="<?php echo base_url('assets/'); ?>img/logo/final_logo.png" alt="" style="width:100%;"></a>
                                    <!-- logo-2 -->
                                    <a href="<?php echo base_url().'Home'; ?>" class="small-logo"><img src="<?php echo base_url('assets/'); ?>img/logo/final_logo.png" alt="" style="width:100%;"></a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-7">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block" style="text-align:left;">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="<?php echo base_url().'Home'; ?>">Home</a></li>
                                            <li><a href="<?php echo base_url().'About'; ?>">About Us</a>
                                                <ul class="submenu">
                                                    <li><a href="<?php echo base_url().'About/Certificate'; ?>">Certificates</a></li>
                                                    <li><a href="<?php echo base_url().'About/Quality_Assurance'; ?>">Quality Assurance</a></li>                                                    
                                                </ul>
                                            </li>
                                            <li><a href="<?php echo base_url().'products/All_products'; ?>">Products</a>
                                                <ul class="submenu">
                                                    <li><a tabindex="1" href="<?php echo base_url('products/Butterfly'); ?>">Butterfly Valves</a>
                                                        <ul class="submenu" style="left:100%;top:0;margin-top: -1px;margin-left:5px;">
                                                            <li><a href="#">Wafer Type Butterfly Valve</a>
                                                                <ul class="submenu" style="left:100%;top:0;margin-top: -1px;margin-left:5px;">
                                                                    <li><a href="<?php echo base_url().'sub_products/Sub_Butterfly'; ?>?product=1">Centric</a></li>
                                                                    <li><a href="<?php echo base_url().'sub_products/Sub_Butterfly'; ?>?product=2">Ecentric</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="<?php echo base_url().'sub_products/Sub_Butterfly'; ?>?product=3">Lug Type Butterfly Valve</a></li>
                                                            <li><a href="#">Double Flanged Butterfly Valve</a>
                                                                <ul class="submenu" style="left:100%;top:0;margin-top: -1px;margin-left:5px;">
                                                                    <li><a href="<?php echo base_url().'sub_products/Sub_Butterfly'; ?>?product=4">Centric</a></li>
                                                                    <li><a href="<?php echo base_url().'sub_products/Sub_Butterfly'; ?>?product=5">Ecentric</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="<?php echo base_url().'products/Sub_Butterfly'; ?>?product=6">Double Flanged Fabricated Butterfly Valve (offset)</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a tabindex="2" href="<?php echo base_url().'products/General_purpose'; ?>">General Purpose Ball Valve</a>
                                                        <ul class="submenu" style="left:100%;top:0;margin-top: -1px;margin-left:5px;">
                                                            <li><a href="<?php echo base_url('sub_products/Sub_general'); ?>?product=1">Split Body Threaded End</a></li>
                                                            <li><a href="<?php echo base_url('sub_products/Sub_general'); ?>?product=2">Single Piece Flange End</a></li>
                                                            <li><a href="<?php echo base_url('sub_products/Sub_general'); ?>?product=3">Two Piece Flange End</a></li>
                                                            <li><a href="<?php echo base_url('sub_products/Sub_general'); ?>?product=4">Three Piece Thread, SW , Flange End</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a tabindex="3" href="<?php echo base_url().'products/Gate_globe_check'; ?>">Gate, Globe, Lift & Swing Check Valve</a>
                                                        <ul class="submenu" style="left:100%;top:0;margin-top: -1px;margin-left:5px;">
                                                            <li><a href="<?php echo base_url('sub_products/Sub_check'); ?>?product=1">Gate Valve</a></li>
                                                            <li><a href="<?php echo base_url('sub_products/Sub_check'); ?>?product=2">Globe Valve</a></li>
                                                            <li><a href="<?php echo base_url('sub_products/Sub_check'); ?>?product=3">Swing Check Valve</a></li>
                                                            <li><a href="<?php echo base_url('sub_products/Sub_check'); ?>?product=4">Wafer Design Spring Loaded Check Valve</a></li>
                                                            <li><a href="<?php echo base_url('sub_products/Sub_check'); ?>?product=5">Wafer Design Swing Check Valve</a></li>
                                                            <li><a href="<?php echo base_url('sub_products/Sub_check'); ?>?product=6">Forged: Gate Valve</a></li>
                                                            <li><a href="<?php echo base_url('sub_products/Sub_check'); ?>?product=7">Forged: Globe Valve</a></li>
                                                            <li><a href="<?php echo base_url('sub_products/Sub_check'); ?>?product=8">Forged: Lift Check Valve</a></li>                                                            
                                                        </ul>
                                                    </li>
                                                    <li><a tabindex="4" href="<?php echo base_url().'products/Special_purpose'; ?>">Special Purpose Ball Valve</a>
                                                        <ul class="submenu" style="left:100%;top:0;margin-top: -1px;margin-left:5px;">
                                                            <li><a href="<?php echo base_url('sub_products/Sub_special'); ?>?product=1">Jacketed</a></li>
                                                            <li><a href="<?php echo base_url('sub_products/Sub_special'); ?>?product=2">Trunnion Mounted</a></li>
                                                            <li><a href="<?php echo base_url('sub_products/Sub_special'); ?>?product=3">Extended Stem</a></li>
                                                            <li><a href="<?php echo base_url('sub_products/Sub_special'); ?>?product=4">Three Way Four Seated Threaded & Flanged</a></li>
                                                            <li><a href="<?php echo base_url('sub_products/Sub_special'); ?>?product=5">Three Way Two Seated L Port Flanged</a></li>
                                                            <li><a href="<?php echo base_url('sub_products/Sub_special'); ?>?product=6">Uni-directional Flush Bottom</a></li>
                                                        </ul>
                                                    </li>
                                                    
                                                    <li><a tabindex="5" href="<?php echo base_url().'products/Valve_automation'; ?>">Valve Automation Systems</a>                                                        
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="<?php echo base_url().'Client'; ?>">Clients</a>
                                                <ul class="submenu">
                                                    <li><a href="<?php echo base_url().'Client/Customer_Appraisal'; ?>">Customer Appraisal</a></li>                                                    
                                                </ul>
                                            
                                            <li><a href="<?php echo base_url().'Gallery'; ?>">Valve Gallery</a></li></li>
                                            <li><a href="<?php echo base_url().'Contact'; ?>">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="<?php echo base_url().'Enquiry'?>" class="btn">Enquiry</a>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>