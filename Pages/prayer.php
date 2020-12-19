<?php

$prayer=$obj->select_any_one('tbl_prayer_page_details','1');

?>      
		<section class="become-volunteer pt-120 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="become-volunteer__content mb-40">
                            <div class="block-title">
                                <p><img src="../assets/images/shapes/heart-2-1.png" width="15" alt="">Ask for God’s will</p>
                                <h3><?php echo $prayer['title'];?></h3>
                            </div><!-- /.block-title -->
                            <p class="block-text mb-40 pr-10"><?php echo $prayer['details'];?> </p>
                          
                        </div><!-- /.become-volunteer__content -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7">
					 <div class="result"></div><!-- /.result -->
                        <form action="db_prayer.php" class="contact-form-validated become-volunteer__form form-one mb-40" method="POST">
                            <div class="form-group">
                                <div class="form-control form-control-full">
                                    <label for="name" class="sr-only">name</label>
                                    <input type="text" name="name" id="name" placeholder="Your Name" required>
                                </div><!-- /.form-control -->
								
                                <div class="form-control form-control-full">
                                    <label for="email" class="sr-only">email</label>
                                    <input type="text" name="email" id="email" placeholder="Email Address" required>
                                </div><!-- /.form-control -->
                                <div class="form-control form-control-full">
                                    <label for="phone" class="sr-only">phone</label>
                                    <input type="text" name="contact" id="phone" placeholder="Phone Number" required>
                                </div><!-- /.form-control -->     
                                <div class="form-control form-control-full">
                                    <label for="message" class="sr-only">message</label>
                                    <textarea name="request" id="message" placeholder="Please enter prayer Request"></textarea>
                                </div><!-- /.form-control -->
                                <div class="form-control form-control-full">
                                    <button type="submit" name="submit" class="thm-btn dynamic-radius">Request</button>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.form-control -->
                            </div><!-- /.form-group -->
                        </form><!-- /.become-volunteer__form -->
                       
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.become-volunteer -->