<?php 
include('config.php');

$edid=$_GET['edtid'];
if (isset($_POST['submit'])) {
	$fname=$_POST['fname'];
  	$lname=$_POST['lname'];
  	$phone=$_POST['phone'];
  	$email=$_POST['email'];
  	$dob=$_POST['dob'];
  	$address=$_POST['address'];

  	$updatequery=mysqli_query($con, "update user_information set firstname='".$fname."',lastname='".$lname."',phone='".$phone."',email='".$email."',dob='".$dob."',address='".$address."' where id='".$edid."'");

  	if ($updatequery) {
  		echo "<script>alert('Update data succesessfully!');</script>";
  		echo "<script>window.location.href = 'index.php';</script>";
  	}else{
  		echo "<script>alert('Refistration Failed, Please Try Again!!!');</script>";
  	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> form </title>
</head>
<body>
	<div class="container">
	<h1>View Result List:</h1>
	<form method="post" action="" enctype='multipart/form-data'>
<?php 
		$selectRes=mysqli_query($con,"select * from user_information where id ='".$edid."'");
		$cunrow=mysqli_num_rows($selectRes);
		if($cunrow>0){
		while($row=mysqli_fetch_assoc( $selectRes )){
		?>
		   <label>First Name:</label>
		   <input type="text" name="fname" placeholder="type your first name" value="<?php echo $row['firstname']; ?>"/><br>

		   <label>Last Name:</label>
		   <input type="text" name="lname" placeholder="type your  last name" value="<?php echo $row['lastname']; ?>"/><br>

		   <label>Phone Number:</label>
		   <input type="text" name="phone" placeholder="type your valid number" max="10" value="<?php echo $row['phone']; ?>"/><br>

		   <label>Email:</label>
		   <input type="email" name="email" placeholder="abc@xyz.com" value="<?php echo $row['email']; ?>"/><br>


		   <label>Date Of Birth:</label>
		   <input type="date" name="dob" placeholder="dd/mm/yyyy" value="<?php echo $row['dob']; ?>"/><br>

		   <label>Address:</label>
		   <textarea name="address" placeholder="type your address"><?php echo $row['address']; ?></textarea><br>
		<?php 
		} // end while
		} // end if
		?>

		  <input type="submit" name="submit" value="submit">
	</form>
</div>
</body>
</html>