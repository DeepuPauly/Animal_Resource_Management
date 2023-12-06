<?php include 'adminheader.php' ;
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
                            <h1 class="display-3 text-white mb-3">Pets</h1>
                            
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
				<th>Pet name</th>
				<th>Type</th>
				<th>Colour</th>
				<th>Details</th>
			</tr>

<?php 

	$h="select * from `tbl_pet` where `pet_id`='$uid'";
	$res=select($h);
	$slno=1;


	foreach ($res as $key) {
		
	

 ?>

 	<tr>
 		<td><?php echo $slno++ ?></td>
 		<td><?php echo $key['petname'] ?></td>
 		<td><?php echo $key['pettype'] ?></td>
 		<td><?php echo $key['petcolour'] ?></td>
 		<td><?php echo $key['details'] ?></td>
 	</tr>



<?php } ?>

		</table>
	</form>
</center>



<?php include 'footer.php' ?>