<?php include 'shopheader.php';
extract($_GET);
$sid=$_SESSION['shop_id'];

if (isset($_POST['submit'])) {
	extract($_POST);


	$dir = "images/";
	$file = basename($_FILES['image']['name']);
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("image_").".".$file_type;
	(move_uploaded_file($_FILES['image']['tmp_name'], $target));

	 $i="insert into `tbl_petproduct` values(null,'$sid','$productname','$price','$quantity','$target')";
	insert($i); 
	// echo $RESSS;
	alert("Added successfully");
	return redirect('shopaddproduct.php');



}

if (isset($_GET['did'])) {
	extract($_GET);


	$d="delete from `tbl_petproduct` where product_id='$did'";
	delete($d);
	alert("deleted successfully");
}

if (isset($_GET['upd'])) {
	extract($_GET);


	$u="select * from `tbl_petproduct` where product_id='$upd'";
	$res=select($u);

}

	if (isset($_POST['update'])) {
		extract($_POST);

	$dir = "images/";
	$file = basename($_FILES['image']['name']);
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("image_").".".$file_type;
	(move_uploaded_file($_FILES['image']['tmp_name'], $target));

	$t="update `tbl_petproduct` set productname='$productname',price='$price',quantity='$quantity',image='$target' where product_id='$upd'";
		update($t);
		alert("updated successfully");
		return redirect('shopaddproduct.php');
	}
 ?>

<!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3">Add Product</h1>
                            
<!-- ---table shows in the web page--- -->

<center>
	<?php if (isset($_GET['upd'])) {
	 ?>
	<form method="post" enctype="multipart/form-data">
		<table class="table" style="width: 500px;color: white">
			<tr>
				<th>Product Name</th>
				<td><input type="text" pattern="[a-zA-Z ]+$" value="<?php echo $res[0]['productname'] ?>" class="form-control" required="" name="productname"></td>
			</tr>
			<tr>
				<th>Price</th>
				<td><input type="number"  value="<?php echo $res[0]['price'] ?>" class="form-control" required="" name="price"></td>
			</tr>
			<tr>
				<th>Quantity</th>
				<td><input type="number" min="1" value="<?php echo $res[0]['quantity'] ?>" class="form-control" required="" name="quantity"></td>
			</tr>
			<tr>
				<th>Image</th>
				<td><input type="file" value="<?php echo $res[0]['image'] ?>" class="form-control" required="" name="image"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="update"></td>
			</tr>
		</table>
	</form>

<?php }else { ?>

	<form method="post" enctype="multipart/form-data">
		<table class="table" style="width: 500px;color: white">
			<tr>
				<th>Product Name</th>
				<td><input type="text" pattern="[a-zA-Z ]+$" class="form-control" required="" name="productname"></td>
			</tr>
			<tr>
				<th>Price</th>
				<td><input type="number" class="form-control" required="" min="1" name="price"></td>
			</tr>
			<tr>
				<th>Quantity</th>
				<td><input type="number" class="form-control" min="1" required="" name="quantity"></td>
			</tr>
			<tr>
				<th>Image</th>
				<td><input type="file" class="form-control" required="" name="image"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="submit"></td>
			</tr>
		</table>
		<?php } ?>
	</form>
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
		<th>slno</th>
		<th>Product Name</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>image</th>
	</tr>

	<?php 

		$p="select * from `tbl_petproduct` where shop_id='$sid'";
		$res=select($p);
		$slno=1;


		foreach ($res as $key) {
		
	 ?>

	 <tr>
	 	<td><?php echo $slno++ ?></td>
	 	<td><?php echo $key['productname'] ?></td>
	 	<td><?php echo $key['price'] ?></td>
	 	<td><?php echo $key['quantity'] ?></td>
	 	<td><img src="<?php echo $key['image'] ?>" width="100" height="100"></td>
	 	<td><a class="btn btn-danger" href="?did=<?php echo $key['product_id'] ?>">delete</a></td>
	 	<td><a class="btn btn-success" href="?upd=<?php echo $key['product_id'] ?>">update</a></td>
	 	<td><a href="?sid=<?php echo $key['shop_id'] ?>"></a></td>

	 </tr>

	<?php } ?>
</table>
</center>

<?php include 'footer.php' ?>