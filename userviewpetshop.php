<?php include 'userheader.php' ?>

     <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/pattikutti.jpg" alt="Image" style="height: 400px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3">Shop</h1>
                            
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
				<th>Shop name</th>
				<th>Place</th>
				<th>Phone</th>
				<th>Email</th>
			</tr>

<?php 

	$h="select * from `tbl_shop`";
	$res=select($h);
	$slno=1;


	foreach ($res as $key) {
		
	

 ?>

 	<tr>
 		<td><?php echo $slno++ ?></td>
 		<td><?php echo $key['shopname'] ?></td>
 		<td><?php echo $key['place'] ?></td>
 		<td><?php echo $key['phone'] ?></td>
 		<td><?php echo $key['email'] ?></td>
 		<td><a class="btn btn-info" href="userviewpetproduct.php?sid=<?php echo $key['shop_id'] ?>">view pet product</a></td>
 	</tr>



<?php } ?>

		</table>
	</form>
</center>



<?php include 'footer.php' ?>