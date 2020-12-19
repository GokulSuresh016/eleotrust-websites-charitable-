<?php
$blog=$obj->select_any('tbl_blog_blog','1');
?>
<section class="news-page news-home pt-120 pb-120">
            <div class="container">
                <div class="row align-items-start align-items-md-center flex-column flex-md-row mb-60">
                    <div class="col-lg-7">
                        <div class="block-title">
                            <p><img src="../assets/images/shapes/heart-2-1.png" width="15" alt="">Blog Posts</p>
                            <h3>Latest news & articles <br> directly from us.</h3>
                        </div><!-- /.block-title -->
                    </div><!-- /.col-lg-7 -->
                    <div class="col-lg-5 d-flex">
                        <div class="my-auto">
                            <p class="block-text pr-10 mb-0"></p><!-- /.block-text -->
                        </div><!-- /.my-auto -->
                    </div><!-- /.col-lg-5 -->
                </div>

                    <div class="row">
					<?php  
					foreach($blog as $blogSingle)
					{
					?>
                        <div class="col-md-4">
                            <div class="wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                                <div class="blog-card" style="height:600px;margin-top:50px;">
                                    <div class="blog-card__inner">
                                        <div class="blog-card__image">
                                            <img src="../../Assets/<?php echo str_replace("../","",$blogSingle['image']);?>" alt="">
                                            <div class="blog-card__date"><?php echo $blogSingle['posted_date'];?></div><!-- /.blog-card__date -->
                                        </div><!-- /.blog-card__image -->
                                        <div class="blog-card__content">  
                                            <h3><a href="blog-single.php?id=<?php echo $blogSingle['blog_blog_id'];?>"><?php echo $blogSingle['title'];?></a></h3>
                                            
                                            <a href="blog-single.php?id=<?php echo $blogSingle['blog_blog_id'];?>" class="blog-card__more" style="position:fixed;bottom:0px;"><i class="far fa-angle-right"></i>Read More</a>
                                            <!-- /.blog-card__more -->
                                        </div><!-- /.blog-card__content -->
                                    </div><!-- /.blog-card__inner -->
                                </div><!-- /.blog-card -->
                            </div><!-- /.wow fadeInLeft -->
                        </div><!-- /.swiper-slide -->
                   <?php
					}
				   ?>
                     
                    </div><!-- /.swiper-wrapper -->
               
            </div><!-- /.container -->
        </section><!-- /.news-page -->

   