<?php
$gallery=$obj->select_any('tbl_gallery_gallery','1');
?>
        <section class="gallery-page pt-120 pb-120">
            <div class="container">
                <div class="gallery-3-col">
				<?php
				foreach($gallery as $gallerySingle)
				{
				?>
                    <div class="gallery-card">
                        <img src="../../Assets/<?php echo str_replace("../","",$gallerySingle['image']);?>" class="img-fluid" alt="">
                        <div class="gallery-content">
                            <a href="../../Assets/<?php echo str_replace("../","",$gallerySingle['image']);?>" class="img-popup" aria-label="open image"><i class="fal fa-plus"></i></a>
                        </div><!-- /.gallery-content -->
                    </div><!-- /.gallery-card -->
        <?php
				}
		?>
                </div><!-- /.gallery-3-col -->
            </div><!-- /.container -->
        </section><!-- /.gallery-page -->