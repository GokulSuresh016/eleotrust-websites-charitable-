<?php
$histroy=$obj->select_any_one('tbl_maininfo_histroy','1');
?> 
        <section class="faq-one pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-one__content">
                            <div class="block-title">
                                <p><img src="../assets/images/shapes/heart-2-1.png" width="15" alt="">Our Story</p>
                                <h3><?php echo $histroy['title'];?></h3>
                            </div><!-- /.block-title -->
                           
						
                            
                                 
                                     <p> <b><?php echo $histroy['histroy'];?></b></p>
                                    
                         
							
                         
                        </div><!-- /.faq-one__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="about-counter__image clearfix">
                            <div class="about-counter__image-content">
                                <img src="../assets/images/shapes/about-count-heart-1-1.png" alt="">
                                <p>We’re here to support you every step of the way.</p>
                            </div><!-- /.about-counter__image-content -->
                            <img src="../../Assets/<?php echo str_replace("../","",$histroy['image']);?>" alt="" class="float-left">
                        </div><!-- /.about-counter__image -->

                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.faq-one -->