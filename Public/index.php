<?php

include"../Template/header.php";
include"../Template/menu.php";
include"../Pages/banner.php";
//include"../Pages/test.php";
include"../Pages/quotes.php";
include"../Pages/aboutus.php";
include"../Pages/activities.php";
include"../Pages/bibleverses.php";
include"../Pages/donation.php";
include"../Pages/volunteers.php";
include"../Pages/blog.php";
include"../Template/footer.php";
?>
   <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
   
        <div class="modal-body">
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
                            
                            <!-- /.thm-btn dynamic-radius -->
                        </form><!-- /.donate-options__form -->
					
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Donate</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->