<?php
require_once"../../Assets/config/db_connect.php";
$obj=new db_connect;

if(isset($_POST['submit']))
{
	unset($_POST['submit']);
	$array=$_POST;
	
	$result=$obj->inserttbl($array,'tbl_prayer_prayer_request');
	if($result>0)
	{
		?>
		<div class="alert alert-success alert-dismissible">
		  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		  <strong>Success!</strong> we have received your request ,we will pray for you.
		</div>
		<?php
		
	}
	else
	{
		
		?>
		<div class="alert alert-danger alert-dismissible">
		  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		  <strong>Failed!</strong> please try after sometime.
		</div>
		<?php
	}
}
?>