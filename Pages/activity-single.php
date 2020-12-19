<?php
if(isset($_GET['aid']))
{
	$activity=$obj->select_any_one('tbl_activities_activity_details','activities_activity_details_id = "'.$_GET['aid'].'"');
}
?>       
	   <section class="cause-details blog-details  pt-120 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="cause-details__content">

                            <div class="cause-card">
                                <div class="cause-card__inner">
                                    <div class="cause-card__image">
                                        <img src="../../Assets/<?php echo str_replace("../","",$activity['image']);?>" alt="">
                                    </div><!-- /.cause-card__image -->
                                 
                                </div><!-- /.cause-card__inner -->
                            </div><!-- /.cause-card -->
                            <h3><?php echo $activity['title'];?></h3>
                            <p> <?php echo $activity['description'];?></p>
                            <p></p>
                            <p></p>
                           
                            
                        </div><!-- /.cause-details__content -->
                        
                


                    </div><!-- /.col-md-12 col-lg-8 -->
                    <div class="col-md-12 col-lg-4">
                        <div class="cause-details__sidebar">
                            <div class="cause-details__organizer">
                                <img src="../assets/images/causes/organizer-1-1.jpg" alt="">
                                <p>Make your prayer your request</p>
                                <h3><strong>Prayer Protects</strong></h3>
                           
                            </div><!-- /.cause-details__organizer -->
                   <div class="cause-details__organizer">
                                <img src="../assets/images/causes/organizer-1-2.jpg" alt="">
                                <p>Make your donation</p>
                                <h3><strong>giving is more impactful than ever</strong></h3>
                           
                            </div><!-- /.cause-details__organizer -->
                        </div><!-- /.cause-details__sidebar -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cause-details -->