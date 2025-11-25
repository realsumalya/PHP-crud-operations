<?php 
include('config.php');
//if(isset($_POST['submit'])){}

$vid=$_GET['viewid'];
?>
<h1>View Result List: <?php echo $vid; ?></h1>
<table border="2">
	<thead>
		<tr>
			<th>Sr.No.</th>
			<th>Name</th>
			<th>Contact No.</th>
			<th>Eamail</th>
			<th>DOB</th>
			<th>Address</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		// echo "select * from user_information where 'id'=$vid";
		// die();
		$selectRes=mysqli_query($con,"select * from user_information where id='".$vid."'");
		
		$cunrow=mysqli_num_rows($selectRes);
		//echo "string-->".$cunrow;
		if($cunrow){
		while($row=mysqli_fetch_assoc( $selectRes )){
		?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['dob']; ?></td>
			<td><?php echo $row['address']; ?></td>
		</tr>
		<?php }
		}else{?>
		<tr>
			<th colspan="6">No Data Found</th>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>