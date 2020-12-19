<?php
$about=$obj->select_any_one('tbl_maininfo_about_details','1');
?>     
	 <section class="about-counter pt-120" style="background-color:#f1f1f1;margin-top:0px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="block-title">
                            <p><img src="../assets/images/shapes/heart-2-1.jpeg" width="15" alt=""><?php echo $about['moto'];?></p>
                            <h3><?php echo $about['title'];?></h3>
                        </div><!-- /.block-title -->
                        <p class="about-counter__text"><?php echo $about['details'];?></p>
                     
                  
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 ">
                        <div class="about-counter__image clearfix wow fadeInRight" data-wow-duration="1500ms">
                            <div class="about-counter__image-content">
                                <img src="../assets/images/shapes/about-count-heart-1-1.png" alt="">
                                <p>You have the Power to Bring Happiness</p>
                            </div><!-- /.about-counter__image-content -->
                            <img src="../../Assets/<?php echo str_replace("../","",$about['image']);?>" alt="" class="float-left">
                        </div><!-- /.about-counter__image -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.containerr -->
        </section><!-- /.about-counter -->