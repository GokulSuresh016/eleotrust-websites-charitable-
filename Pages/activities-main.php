   <?php
$activity=$obj->select_any('tbl_activities_activity_details','1');
   ?>
        <section class="causes-page causes-home pt-120 pb-120">
            <div class="container">
                <div class="row align-items-start align-items-md-center flex-column flex-md-row mb-60">
                    <div class="col-lg-7">
                        <div class="block-title">
                            <p><img src="../assets/images/shapes/heart-2-1.jpeg" width="15" alt="">Do what ever you can</p>
                            <h3>Donate to charity causes <br> around the world.</h3>
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
					foreach($activity as $activitySingle)
					{
					?>
                        <div class="col-lg-4">
                            <div class="cause-card">
                                <div class="cause-card__inner">
                                    <div class="cause-card__image">
                                        <img src="../../Assets/<?php echo str_replace("../","",$activitySingle['image']);?>" alt="">
                                    </div><!-- /.cause-card__image -->
                                    <div class="cause-card__content" style="height:200px;">
                                      
                                        <h3><a href="activity-single.php?aid=<?php echo $activitySingle['activities_activity_details_id'];?>"><?php echo $activitySingle['title'];?></a></h3>
                                       <!-- <p>Lorem Ipsum simply dummy text of printng and type industry.</p>-->
                                      
                                    </div><!-- /.cause-card__content -->
                                </div><!-- /.cause-card__inner -->
                            </div><!-- /.cause-card -->
                        </div><!-- /.swiper-slide -->
                      <?php
					}
					  ?>

            </div><!-- /.container -->
            </div><!-- /.container -->
        </section><!-- /.causes-page -->