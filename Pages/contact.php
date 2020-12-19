<?php
$contact=$obj->select_any_one('tbl_contact_contact_details','1');
$basic=$obj->select_any_one('tbl_maininfo_basic_details','1');
$vision=$obj->select_any_one('tbl_maininfo_about_details','1');
?>  
<section class="contact-page pt-120 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-page__content mb-40">
                            <div class="block-title">
                                <p><img src="../assets/images/shapes/heart-2-1.png" width="15" alt="">Contact With Us</p>
                                <h3><?php echo $contact['title'];?>.</h3>
                            </div><!-- /.block-title -->
                            <p class="block-text mb-30 pr-10"><?php echo $contact['details'];?> </p>
                  
                        </div><!-- /.contact-page__content -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7">
                        <form action="assets/inc/sendemail.php" class="contact-form-validated contact-page__form form-one mb-40">
                            <div class="form-group">
                                <div class="form-control">
                                    <label for="name" class="sr-only">Name</label>
                                    <input type="text" name="name" id="name" placeholder="Your Name">
                                </div><!-- /.form-control -->
                                <div class="form-control">
                                    <label for="email" class="sr-only">email</label>
                                    <input type="text" name="email" id="email" placeholder="Email Address">
                                </div><!-- /.form-control -->
                                <div class="form-control">
                                    <label for="phone" class="sr-only">phone</label>
                                    <input type="text" name="phone" id="phone" placeholder="Phone Number">
                                </div><!-- /.form-control -->
                                <div class="form-control">
                                    <label for="subject" class="sr-only">subject</label>
                                    <input type="text" name="subject" id="subject" placeholder="Subject">
                                </div><!-- /.form-control -->
                                <div class="form-control form-control-full">
                                    <label for="message" class="sr-only">message</label>
                                    <textarea name="message" placeholder="Write a Message" id="message"></textarea>
                                </div><!-- /.form-control -->
                           
								
                            </div><!-- /.form-group -->
                        </form><!-- /.contact-page__form -->
						     
                                    <a href="mailto:<?php echo $basic['email']; ?>"><button type="submit" class="thm-btn dynamic-radius">Submit Message</button></a>
                                    <!-- /.thm-btn dynamic-radius -->
                              
                        <div class="result"></div><!-- /.result -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-page -->

        <div class="row">
         
    
                    <div class="col-lg-4">
                      
                            <div class="contact-card d-flex flex-column text-center justify-content-center align-items-center background-secondary" style="background-image: url(../assets/images/shapes/contact-card-bg-1-1.png);">
                                <i aria-label="contact icon" class="azino-icon-family"></i>
                                <h3>Mission & Vision</h3>
                                <p><?php echo $vision['mission'];?></p>
                            </div><!-- /.contact-card -->
                            </div><!-- /.contact-card -->
                      <div class="col-lg-4">
                       
                            <div class="contact-card d-flex flex-column text-center justify-content-center align-items-center background-primary" style="background-image: url(../assets/images/shapes/contact-card-bg-1-1.png);">
                                <i aria-label="contact icon" class="azino-icon-address"></i>
                                <h3>Address</h3>
                                <p><?php echo $basic['address'];?></p>
                            </div><!-- /.contact-card -->
                        </div><!-- /.swiper-slide -->
                          <div class="col-lg-4">
                            <div class="contact-card d-flex flex-column text-center justify-content-center align-items-center background-special" style="background-image: url(../assets/images/shapes/contact-card-bg-1-1.png);">
                                <i aria-label="contact icon" class="azino-icon-contact"></i>
                                <h3>Contact</h3>
                                <p><a href="mailto:"><?php echo $basic['email'];?></a> <br> <a href="tel:<?php echo $basic['phonenumber'];?>"><?php echo $basic['phonenumber'];?></a></p>
                            </div><!-- /.contact-card -->
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
        
   
        </div><!-- /.contact-card-carousel -->
