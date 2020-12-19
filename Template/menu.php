<?php
require_once"../../Assets/config/db_connect.php";
$obj=new db_connect;
$basic=$obj->select_any_one('tbl_maininfo_basic_details','1');
?>       
	   <div class="main-header__two">
            <div class="main-header__top">
                <div class="container">
                    <p>Welcome to Eleosministry</p>
                    <div class="main-header__social">
                        <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                    </div><!-- /.main-header__social -->
                </div><!-- /.container -->
            </div><!-- /.main-header__top -->
            <div class="header-upper">
                <div class="container">
                    <div class="logo-box">
                        <a href="index.html" aria-label="logo image"><img src="../assets/images/logo-light.png" width="150" alt=""></a>
                        <span class="fa fa-bars mobile-nav__toggler"></span>
                    </div><!-- /.logo-box -->
					<div class="header-info">
                        <div class="header-info__box">
                            <i class="azino-icon-email1"></i>
                            <div class="header-info__box-content">
                                <h3>Email</h3>
                                <p><a href="mailto:<?php echo $basic['email']; ?>"><?php echo $basic['email']; ?></a></p>
                            </div><!-- /.header-info__box-content -->
                        </div><!-- /.header-info__box -->
                        <div class="header-info__box">
                            <i class="azino-icon-calling"></i>
                            <div class="header-info__box-content">
                                <h3>Phone</h3>
                                <p><a href="tel:<?php echo $basic['phonenumber']; ?>"><?php echo $basic['phonenumber']; ?></a></p>
                            </div><!-- /.header-info__box-content -->
                        </div><!-- /.header-info__box -->
                        <div class="header-info__box">
                            <img style="width:38px;height:37.76px;" src="../assets/images/header-logo.png">
                            <div class="header-info__box-content">
                                <h3>We Are</h3>
                                <p>Eleosministry</p>
                            </div><!-- /.header-info__box-content -->
                        </div><!-- /.header-info__box -->
                    </div><!-- /.header-info -->
					
                </div><!-- /.container -->
            </div><!-- /.header-upper -->
            </div><!-- /.header-upper -->
            <nav class="main-menu">
                <div class="container">
                    <ul class="main-menu__list dynamic-radius">
                        <li class="">
                            <a href="index.php">Home</a>
                        
                        </li>
                        <li class="">
                            <a href="about.php">About</a>
                          
                        </li>
                        <li class=""><a href="activities.php">Activities</a>
                        
                        </li>
                        <li class=""><a href="volunteers.php">Volunteers</a>
                          
                        </li>
                        <li class=""><a href="gallery.php">Gallery</a>
                          
                        </li>
						       <li class=""><a href="prayer.php">Prayer</a>
                          
                        </li>
						  <li class=""><a href="blog.php">Blog</a>
                          
                        </li>
                        <li><a href="contact.php">Contact</a></li>
                        <!--<li class="search-btn search-toggler">
                            <a href="#"><i class="azino-icon-magnifying-glass"></i></a>
                        </li>-->
                    </ul><!-- /.main-menu__list -->	
                    <input type="submit" value="Donate Now" class="thm-btn dynamic-radius" style="border-bottom-right-radius:39.5px;border-top-right-radius:39.5px;border-bottom-left-radius:0px;border-top-left-radius:0px" data-toggle="modal" data-target="#myModal"><!-- /.thm-btn dynamic-radius -->
                </div><!-- /.container -->
            </nav>
            <!-- /.main-menu -->
        </div><!-- /.main-header__two -->
		<div class="stricky-header stricked-menu">
            <div class="container" style="justify-content:normal;">
                <div class="logo-box">
                    <a href="index.html"><img src="../assets/images/logo-light.png" width="101" alt=""></a>
                </div><!-- /.logo-box -->
                <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
            </div><!-- /.container -->
        </div><!-- /.stricky-header -->