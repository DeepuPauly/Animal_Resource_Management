<?php include 'adminheader.php';

extract($_GET);


 ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/pattikutti.jpg" alt="Image" style="height: 400px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3">Products</h1>
                            
<!-- ---table shows in the web page--- -->
<!-----table shows in the web page----->
 </div>
                    </div>
                </div>
               
            </div>

        </div>
    </div>
    <!-- Carousel End -->

<center>
	<form method="post">
		<table class="table" style="width: 500px;color: black">
			<tr>
				<th>Slno</th>
				<th>Product name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Image</th>
			</tr>

<?php 

	$h="select * from `tbl_petproduct` where shop_id='$sid'";
	$res=select($h);
	$slno=1;


	foreach ($res as $key) {
		
	

 ?>

 	<tr>
 		<td><?php echo $slno++ ?></td>
 		<td><?php echo $key['productname'] ?></td>
 		<td><?php echo $key['price'] ?></td>
 		<td><?php echo $key['quantity'] ?></td>
 		<td><img src="<?php echo $key['image'] ?>" width="100" height="100"></td>
 	</tr>



<?php } ?>

		</table>
	</form>
</center>



<?php include 'footer.php' ?>