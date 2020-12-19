   <?php
   $quotes=$obj->select_any('tbl_maininfo_saints_quotes','1');
   ?>
   <section class="gallery-home-one ">
                <div class="container-fluid">
                    <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 1, "autoplay": { "delay": 5000 }}'>
                        <div class="swiper-wrapper">
						<?php
						foreach($quotes as $quotesSingle)
						{
						?>
                            <div class="swiper-slide" style="min-height:100vh;">
                               <section class="video-card-two">
            <div class="container wow fadeInUp" data-wow-duration="1500ms">
                <div class="inner-container dynamic-radius" style="background-image: url(../assets/images/shapes/video-bg-1-1.png);">
                    <div class="row align-items-center">
					
                        <div class="col-lg-3">
                            <div class="video-card-two__box">
                                <img src="../../Assets/<?php echo str_replace("../","",$quotesSingle['image']);?>" alt="">
                              
                                <!-- /.video-card-two__box-btn -->
                            </div><!-- /.video-card-two__box -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-3">
                            <h3><?php echo str_replace("../","",$quotesSingle['name']);?></h3>
                        </div><!-- /.col-lg-4 -->
                        <div class="col-lg-6">
                            <p><?php echo str_replace("../","",$quotesSingle['quote']);?></p>
                        </div><!-- /.col-lg-5 -->
					
		
                    </div><!-- /.row -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </section><!-- /.video-card-two -->
                    </div><!-- /.swiper-container -->
					<?php
						}
					?>
					
					
					
					
                    </div><!-- /.swiper-container -->
                </div><!-- /.container -->
                </div><!-- /.container -->
            </section><!-- /.gallery-home-one -->