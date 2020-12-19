<?php
if(isset($_GET['id']))
{
	$blog=$obj->select_any_one('tbl_blog_blog','blog_blog_id = "'.$_GET['id'].'"');
	
	
}
?> 
 <section class="event-details pt-120">
            <div class="container">
		
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <h3><?php echo $blog['title'];?></h3>
                        <p<?php echo $blog['content'];?></p>
                    </div><!-- /.col-md-12 -->
                    <div class="col-md-12 col-lg-6">
                        <img src="../../Assets/<?php echo str_replace("../","",$blog['image']);?>" alt="" class="img-fluid">
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
			
            </div><!-- /.container -->
        </section><!-- /.event-details -->