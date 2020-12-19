      
<?php
$contact=$obj->select_any_one('tbl_maininfo_basic_details','1');
?>	 
 <section class="donate-options pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="donate-options__content">
                            <div class="block-title">
                                <p><img src="assets/images/shapes/heart-2-1.png" width="15" alt="">Donate Now</p>
                                <h3>No one has ever become poor by giving.</h3>
                            </div><!-- /.block-title -->
                            <p>When you choose to give, you may not realize that donating to charity will do more than just help your favourite cause, giving can also provide you with many personal benefits</p>
                            <div class="donate-options__call">
                                <i class="azino-icon-telephone"></i>
                                <div class="donate-options__call-content">
                                    <p>Have any question about donation? <br> <span>Call us now:</span> <a href="tel:<?php echo $contact['phonenumber'];?>"><?php echo $contact['phonenumber'];?></a></p>
                                </div><!-- /.donate-options__call-content -->
                            </div><!-- /.donate-option__call -->
                            <div class="donate-options__icon-wrap">
                                <div class="donate-options__icon">
                                    <i class="azino-icon-dove"></i>
                                    <h3><a href="#">Living</a></h3>
                                </div><!-- /.donate-options__icon -->
                                <div class="donate-options__icon">
                                    <i class="azino-icon-hamburger"></i>
                                    <h3><a href="#">Food</a></h3>
                                </div><!-- /.donate-options__icon -->
                                <div class="donate-options__icon">
                                    <i class="azino-icon-family"></i>
                                    <h3><a href="#">Family</a></h3>
                                </div><!-- /.donate-options__icon -->
                            </div><!-- /.donate-options__icon-wrap -->
                        </div><!-- /.donate-options__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <form action="#" class="donate-options__form wow fadeInUp" data-wow-duration="1500ms">
                            <h3 class="text-center">Start donating now</h3>
                            <p class="text-center">Lorem ipsum dolor sit amet, conse ctetur <br> adipisicing elit sed do eiusm
                                od tempor ut labore.</p>
                            <label for="donate-name" class="sr-only"></label><!-- /.sr-only -->
                            <input type="text" id="donate-name" placeholder="Your Name">
                            <label for="donate-address" class="sr-only"></label><!-- /.sr-only -->
                            <input type="text" value="" placeholder="Your Address" id="donate-amount">
                            <label for="donate-contact" class="sr-only"></label><!-- /.sr-only -->
                            <input type="text" value="" placeholder="Contact Number" id="donate-amount">
							<label for="donate-email" class="sr-only"></label><!-- /.sr-only -->
                            <input type="email" value="" placeholder="Your Email" id="donate-amount">
							<label for="donate-Purpose" class="sr-only"></label><!-- /.sr-only -->
                            <input type="text" value="" placeholder="Purpose" id="donate-amount">
                            <button type="submit" class="thm-btn dynamic-radius">Donate Now</button>
                            <!-- /.thm-btn dynamic-radius -->
                        </form><!-- /.donate-options__form -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.donate-options -->