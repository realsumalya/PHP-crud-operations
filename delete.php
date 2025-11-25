<?php
 include('config.php');


 $deid=$_GET['delid'];


  	$deletequery=mysqli_query($con, "delete from user_information where id='".$deid."'");


  	if ($deletequery>0) {
  	    
  		echo "<script>window.location.href = 'index.php';</script>";
  	}else{
  		echo "<script>alert('already deleted ');</script>";
  	}
?>
