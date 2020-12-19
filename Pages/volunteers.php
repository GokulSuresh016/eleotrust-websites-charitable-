        <?php
$volunteers=$obj->select_any('tbl_volunteers_volunteer_details','1 order by volunteers_volunteer_details_id LIMIT 4');
?> 
		<section class="team-about pt-120 pb-120" style="background-image: url(../assets/images/team/team-map-1-1.png);">
            <div class="container">
                <div class="team-about__top">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-7">
                            <div class="block-title">
                                <p><img src="../assets/images/shapes/heart-2-1.png" width="15" alt="">Our Volunteers</p>
                                <h3>Meet those who help <br> others in need.</h3>
                            </div><!-- /.block-title -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-5">
                            <p class="team-about__top-text"><!--Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Have you done google research which works all the time. --></p>
                        </div><!-- /.col-md-12 col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.team-about__top -->
                <div class="team-4-col">
				<?php
				foreach($volunteers as $volunteersSingle)
				{
				?>
                    <div class="wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="team-card text-center content-bg-1">
                            <div class="team-card__image">
                               <a href="volunteers.php"> <img src="../../Assets/<?php echo str_replace("../","",$volunteersSingle['image']);?>" alt=""></a>
                            </div><!-- /.team-card__image -->
                            <div class="team-card__social">
                                <a href="<?php echo $volunteersSingle['twitter'];?>" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                                <a href="<?php echo $volunteersSingle['facebook'];?>" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                                <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                <a href="<?php echo $volunteersSingle['instagram'];?>" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                            </div><!-- /.team-card__social -->
                            <div class="team-card__content">
                                <h3><?php echo $volunteersSingle['name'];?></h3>
								<p><?php echo $volunteersSingle['designation'];?></p>
                               <!--<p>Student</p>-->
                            </div><!-- /.team-card__content -->
                        </div><!-- /.team-card -->
                    </div><!-- /.wow fadeInLeft -->
            <?php
				}
			?>
             
                </div><!-- /.team-4-col -->
            </div><!-- /.container -->
        </section><!-- /.team-about -->