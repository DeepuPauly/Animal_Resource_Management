<?php include 'userheader.php';
extract($_GET);
$uid=$_SESSION['user_id'];

	if (isset($_POST['submit'])) {
	extract($_POST);
		$j="insert into `tbl_pet` values(null,'$uid','$pname','$type','$colour','$details')";
		insert($j);

	alert("added successfully");
	return redirect("useraddmypet.php");

}

if (isset($_GET['did'])) {
	extract($_GET);

	$v="delete from `tbl_pet` where `pet_id`='$did'";
	delete($v);

	alert("deleted successfully");

}

if (isset($_GET['upd'])) {
	extract($_GET);

	$h="select * from `tbl_pet` where `pet_id`='$upd'";
	$res=select($h);


}

if (isset($_POST['update'])) {
	extract($_POST);

	$z="update `tbl_pet` set `petname`='$pname',`pettype`='$type',`petcolour`='$colour',`details`='$details' where pet_id='$upd'";
	update($z);
	alert("updated successfully");
	return redirect('useraddmypet.php');
	
}
 ?>
      <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/pattikutti.jpg" alt="Image" style="height: 400px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3">Add Pet</h1>
                            
<!-- ---table shows in the web page--- -->
  
<center>
	<?php if (isset($_GET['upd'])) {
		
	?>
	<form method="post">
		<table class="table" style="width: 500px;color: white">
			<tr>
				<th>pet name</th>
				<td><input type="text" pattern="[a-zA-Z ]+$" value="<?php echo $res[0]['petname'] ?>" class="form-control"  required="" name="pname"></td>
			</tr>
			<tr>
				<th>type</th>
				<td><input type="text" value="<?php echo $res[0]['pettype'] ?>" class="form-control"  required="" name="type"></td>
			</tr>
			<tr>
				<th>colour</th>
				<td><input type="text" value="<?php echo $res[0]['petcolour'] ?>" class="form-control"  required="" name="colour"></td>
			</tr>
			<tr>
				<th>details</th>
				<td><input type="textarea" value="<?php echo $res[0]['details'] ?>" class="form-control"  required="" name="details"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="update"></td>
			</tr>
		</table>

<?php }else{ ?>

		<form method="post">
		<table class="table" style="width: 500px;color: white">
			<tr>
				<th>Pet name</th>
				<td><input type="text" pattern="[a-zA-Z ]+$" class="form-control"  required="" name="pname"></td>
			</tr>
			<tr>
				<th>Pet Type</th>
				<td><input type="text" class="form-control"  required="" name="type"></td>
			</tr>
			<tr>
				<th>Pet Colour</th>
				<td><input type="text" class="form-control"  required="" name="colour"></td>
			</tr>
			<tr>
				<th>Pet Details</th>
				<td><input type="text" class="form-control"  required="" name="details"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="submit"></td>
			</tr>
		</table>
	</form>
<?php } ?>
</center>

<!-----table shows in the web page----->
 </div>
                    </div>
                </div>
               
            </div>

        </div>
    </div>
    <!-- Carousel End -->

<center>
	<table class="table" style="width: 500px;color: black">
	<tr>
		<th>Pet name</th>
		<th>Pet Type</th>
		<th>Colour</th>
		<th>Details</th>
	</tr>

	<?php 

		$g="select * from `tbl_pet` where `user_id`='$uid'";
		$res=select($g);

		foreach ($res as $key) {
			
	 ?>

	 	<tr>
	 		<td><?php echo $key['petname'] ?></td>
	 		<td><?php echo $key['pettype'] ?></td>
	 		<td><?php echo $key['petcolour'] ?></td>
	 		<td><?php echo $key['details'] ?></td>
	 		<td><a class="btn btn-danger" href="?did=<?php echo $key['pet_id'] ?>">delete</a></td>
	 		<td><a class="btn btn-success" href="?upd=<?php echo $key['pet_id'] ?>">update</a></td>
	 		<td><a href="?pet=<?php echo $key['pet_id'] ?>"></a></td>

	 	</tr>

	<?php } ?>
	</table>
</center>


<?php include 'footer.php' ?>