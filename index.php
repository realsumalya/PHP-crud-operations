<?php
  include('config.php');

  if(isset($_POST['submit'])){

  	$fname=$_POST['fname'];
  	$lname=$_POST['lname'];
  	$phone=$_POST['phone'];
  	$email=$_POST['email'];
  	$dob=$_POST['dob'];
  	$gender=$_POST['gender'];
  	$address=$_POST['address'];
  	$pass=$_POST['password'];
  	$cpass=$_POST['cpassword'];

  	if ($fname==""||$lname==""||$phone==""||$email==""||$dob==""||$gender==""||$address==""||$pass==""||$cpass="") {
  		echo "<script>alert('Please enter all required fields..!!');</script>";
  		echo "<script>window.location.href = 'index.php';</script>";
  	} else {


  	if($pass==$cpass){
  	 $query=mysqli_query($con, "insert into user_information(firstname,lastname,phone,email,dob,gender,address,password,profileimage) value('$fname','$lname', '$phone', '$email', '$dob', '$gender', '$address', MD5('".$pass."'), '$imgContent')");

  	if ($query) {
  		echo "<script>alert('submit data succesessfully!');</script>";
  		echo "<script>window.location.href = 'index.php';</script>";
  	}else{
  		echo "<script>alert('Refistration Failed, Please Try Again!!!');</script>";
  	}
  	// password varification else function
	} else {
		echo "<script>alert('Your password not match, Access Denied!');</script>";
	}
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
	<form method="post" action="" enctype='multipart/form-data'>

		   <label>First Name:</label>
		   <input type="text" name="fname" placeholder="type your first name" /><br>

		   <label>Last Name:</label>
		   <input type="text" name="lname" placeholder="type your  last name" /><br>

		   <label>Phone Number:</label>
		   <input type="text" name="phone" placeholder="type your valid number" max="10" /><br>

		   <label>Email:</label>
		   <input type="email" name="email" placeholder="abc@xyz.com" /><br>


		   <label>Date Of Birth:</label>
		   <input type="date" name="dob" placeholder="dd/mm/yyyy" /><br>

		   <label>Gender:</label>
		   <input type="radio" name="gender" value="male">male
		   <input type="radio" name="gender" value="female">female<br>


		   <label>Address:</label>
		   <textarea name="address" placeholder="type your address"></textarea><br>


		   <label>Password:</label>
		   <input type="password" name="password" placeholder="********"/><br>

		   <label>Confirm Password:</label>
		  <input type="password" name="cpassword" placeholder="********"/><br>

		   <label>Profile Picture:</label>
		  <input type="file" name="profileimage"/><br>

		  <input type="submit" name="submit" value="submit">
	</form>
<div class="view-section">
    <table border="2">
    	<thead>
    		<tr>
    			<th>id</th>
    			<th>name</th>
    			<th>phone</th>
    			<th>email</th>
    			<th>gender</th>
    			<th>dob</th>
    			<th>address</th>
    			<th>Action</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php 
    		//MySQL Query to read data
			$i=0;
			$selectRes=mysqli_query($con,"select * from user_information");
			$cunrow=mysqli_num_rows($selectRes);
		    if($cunrow>0){
		        while($row=mysqli_fetch_assoc( $selectRes )){
		        	// echo "<pre>";
		        	// print_r($row);
		    ?>
		    <tr>
		    	<td><?php echo $i=$i+1; ?></td>
		    	<td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
		    	<td><?php echo $row['phone']; ?></td>
		    	<td><?php echo $row['email']; ?></td>
		    	<td><?php echo $row['gender']; ?></td>
		    	<td><?php echo $row['dob']; ?></td>
		    	<td><?php echo $row['address']; ?></td>
		    	<!-- <td style="width:100px;">
		    		<img src="php/images/<?php echo $row['profileimage']; ?>" alt="" style="width:80px;height:80px;">
		    	</td> -->
		    	<td>
		    		<a href="view.php?viewid= <?php echo htmlentities($row['id']); ?>">View</a>
		    		<a href="edit.php?edtid= <?php echo htmlentities($row['id']); ?>">Edit</a>
		    		<a href="delete.php?delid= <?php echo htmlentities($row['id']); ?>">Del</a>
		    	</td>
		    </tr>
		    <?php
		        }
		      }else{
		      	echo '<tr><td colspan="7">No Rows Returned</td></tr>';
		      }
    		?>
    	</tbody>
    </table>
</div>
</div>
</body>
</html>