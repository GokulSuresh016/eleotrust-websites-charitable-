<?php
$vision=$obj->select_any('tbl_maininfo_vision','1');
?> 
        <section class="faq-one pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-one__content">
                            <div class="block-title">
                                <p><img src="../assets/images/shapes/heart-2-1.png" width="15" alt="">Our Vision</p>
                                <h3>Be the change you want to see in the world.</h3>
                            </div><!-- /.block-title -->
                            <ul id="accordion" class=" wow fadeInUp list-unstyled" data-wow-duration="1500ms">
							<?php 
							$i=0;
							foreach($vision as $visionSingle)
							{
							?>
                                <li>
                                    <h2 class="para-title">
                                        <span class="collapsed" role="button" data-toggle="collapse" data-target="#collapse<?php echo $i;?>" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="far fa-plus"></i>
                                            <?php echo $visionSingle['titile'];?>
                                        </span>
                                    </h2>
                                    <div id="collapse<?php echo $i;?>" class="collapse" role="button" aria-labelledby="collapseTwo" data-parent="#accordion">
                                        <p><?php echo $visionSingle['details'];?></p>
                                    </div>
                                </li>  
								<?php
							$i=$i+1;
							}
								?>
                            </ul>
                        </div><!-- /.faq-one__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="about-counter__image clearfix">
                            <div class="about-counter__image-content">
                                <img src="../assets/images/shapes/about-count-heart-1-1.png" alt="">
                                <p>We’re here to support you every step of the way.</p>
                            </div><!-- /.about-counter__image-content -->
                            <img src="../assets/images/resources/vision.jpg" alt="" class="float-left">
                        </div><!-- /.about-counter__image -->

                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.faq-one -->