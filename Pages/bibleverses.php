        <?php
$bible=$obj->select_any_one('tbl_maininfo_bible_verses_','1');
?>       
	  <section class="about-two pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-two__image wow fadeInLeft" data-wow-duration="1500ms">
                            <img src="../../Assets/<?php echo str_replace("../","",$bible['image']);?>" alt="">
                            <div class="about-two__award" style="bottom:0%;left:20%;">
                                <img src="../assets/images/shapes/about-bag-1-2.png" alt="">
                            </div><!-- /.about-two__award -->
                        </div><!-- /.about-two__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-xl-6">
                        <div class="about-two__content">
                            <div class="block-title">
                                <p><img src="../assets/images/shapes/heart-2-1.png" width="15" alt="">Our inspiration</p>
                                <h3><?php echo $bible['title'];?></h3>
                            </div><!-- /.block-title -->
                            <p class="mb-40 pr-10"><?php echo $bible['quotes'];?></p>
                     
                            <!-- <a href="about.html" class="thm-btn dynamic-radius">Discover More</a>-->
                            <!-- /.thm-btn dynamic-radius -->
                        </div><!-- /.about-two__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-two -->