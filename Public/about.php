<?php
include"../Template/header.php";
include"../Template/menu.php";
?>
    <section class="page-header">
            <div class="page-header__bg" style="background-image: url(../assets/images/backgrounds/page-header-1-1.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2>About Us</h2>
                <ul class="thm-breadcrumb list-unstyled dynamic-radius">
                    <li><a href="index.html">Home</a></li>
                    <li>-</li>
                    <li><span>About</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->
<?php
include"../Pages/aboutus.php";
include"../Pages/mission.php";
include"../Pages/histroy.php";

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