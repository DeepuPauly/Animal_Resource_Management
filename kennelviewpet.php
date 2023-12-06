<?php include 'kennelheader.php';

$uid=$_SESSION['user_id'];
extract($_GET);
 ?>

  <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3">pets</h1>
                            
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
	<table class="table" style="width: 500px;color: black">
		<tr>
			<th>Owner name</th>
			<th>Pet name</th>
			<th>Pet type</th>
			<th>Pet colour</th>
			<th>Pet details</th>
		</tr>


		<?php 

		$p="select * from `tbl_pet` inner join `tbl_users` using(user_id) where user_id='$uid'";
		$res=select($p);

		foreach ($res as $key) {

		 ?>

		 <tr>
		 	<td><?php echo $key['firstname'] ?></td>
		 	<td><?php echo $key['petname'] ?></td>
		 	<td><?php echo $key['pettype'] ?></td>
		 	<td><?php echo $key['petcolour'] ?></td>
		 	<td><?php echo $key['details'] ?></td>

		 </tr>

		<?php } ?>
	</table>
</center>


<?php include 'footer.php' ?>