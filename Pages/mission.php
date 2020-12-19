<?php
$about=$obj->select_any_one('tbl_maininfo_about_details','1');
?>   
	  <section class="call-to-action-two">

            <div class="call-to-action-two__bg" style="background-image: url(../assets/images/backgrounds/page-header-1-2.jpg);">
            </div>
            <!-- /.page-header__bg -->
            <div class="container pt-80 pb-80">
                <i class="azino-icon-charity call-to-action-two__icon"></i>
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="block-title">
                            <p><img src="../assets/images/shapes/heart-2-1.png" width="15" alt="">Our Mission</p><br>
                            <h4 style="color:white;"><?php echo $about['mission'];?></h4>
                        </div><!-- /.block-title -->

                    </div><!-- /.col-lg-6 -->
                 
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.call-to-action-two -->