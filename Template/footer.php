<?php
$basic=$obj->select_any_one('tbl_maininfo_basic_details','1');
$blog=$obj->select_any('tbl_blog_blog','1 order by blog_blog_id LIMIT 3');
?>
     <section class="site-footer">
            <div class="main-footer pt-142 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget mb-40 footer-widget__about"> 
                                <a href="index.html" aria-label="logo image">
                                    <img src="../assets/images/logo-light.png" class="footer-widget__logo" width="250" alt="">
                                </a>
                                <p>Lorem ipsum dolor sit amet consect etur adi pisicing elit sed.</p>
                                <ul class="list-unstyled footer-widget__contact">
                                    <li><a href="mailto:<?php echo $basic['phonenumber']; ?>"><i  class="azino-icon-telephone"></i><?php echo $basic['phonenumber']; ?></a></li>
                                    <li><a href="mailto:<?php echo $basic['email']; ?>"><i class="azino-icon-email"></i><?php echo $basic['email']; ?></a></li>
                                    <li style="color:#fff;"><a href="#"><i class="azino-icon-pin"></i></a><?php echo $basic['address']; ?></li>
                                </ul><!-- /.footer-widget__contact -->
                            </div><!-- /.footer-widget footer-widget__about -->
                        </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget footer-widget__link mb-40">
                                <h3 class="footer-widget__title">Explore</h3><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__link-list">
                                    <li><a href="activities.php">Our Activities</a></li>
                                    <li><a href="about.php">About us</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                    <li><a href="volunteers.php">Our team</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                   
                                </ul><!-- /.footer-widget__link-list -->
                            </div><!-- /.footer-widget footer-widget__link -->
                        </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget mb-40 footer-widget__blog">
                                <h3 class="footer-widget__title">Blog</h3><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__blog">
								<?php
foreach($blog as $blogSingle)	
{							
								?>
                                    <li>
                                        <img style="height:68px;width:70px;" src="../../Assets/<?php echo str_replace("../","",$blogSingle['image']);?>" alt="">
                                        <h3><a href="blog-single.php?id=<?php echo $blogSingle['blog_blog_id']?>"><?php echo $blogSingle['title']?></a></h3>
                                    </li> 
                               <?php
}
							   ?>
                                </ul><!-- /.footer-widget__blog -->
                            </div><!-- /.footer-widget footer-widget__blog -->
                        </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                   
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.main-footer -->
            <div class="footer-bottom">
                <div class="container">
                    <span class="scroll-to-top scroll-to-target" data-target="html"><i class="far fa-angle-up"></i></span>
					<div class="row" style="text-align:center;!important">
                    <p>© Copyright By Computer Park IT Solutions</p>
					</div>
                    <!--<div class="footer-social">
                        <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                    </div>--><!-- /.footer-social -->
                </div><!-- /.container -->
            </div><!-- /.footer-bottom -->
        </section><!-- /.site-footer -->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="far fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img style="width:150px;" src="../assets/images/logo-light.png" alt=""	 /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="azino-icon-email"></i>
                    <a href="mailto:<?php echo $basic['email']; ?>"><?php echo $basic['email']; ?></a>
                </li>
                <li>
                    <i class="azino-icon-telephone"></i>
                    <a href="tel:<?php echo $basic['phonenumber'];?>"><?php echo $basic['phonenumber'];?></a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__language">
                    <img src="../assets/images/resources/flag-1-1.jpg" alt="">
                    <label class="sr-only" for="language-select">select language</label><!-- /#language-select.sr-only -->
                    <select class="selectpicker" id="language-select">
                        <option value="english">English</option>
                        <option value="arabic">Arabic</option>
                    </select>
                </div><!-- /.mobile-nav__language -->
                <div class="mobile-nav__social">
                    <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/swiper.min.js"></script>
    <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/jquery.validate.min.js"></script>
    <script src="../assets/js/bootstrap-select.min.js"></script>
    <script src="../assets/js/wow.js"></script>
    <script src="../assets/js/odometer.min.js"></script>
    <script src="../assets/js/jquery.appear.min.js"></script>

    <!-- template js -->
    <script src="../assets/js/theme.js"></script>
</body>

</html>