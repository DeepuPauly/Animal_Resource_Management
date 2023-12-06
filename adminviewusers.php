<?php include 'adminheader.php' ?>

  <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/pattikutti.jpg" alt="Image" style="height: 400px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3">Users</h1>
                            
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
	<h1>view users</h1>
	<table class="table" style="width: 500px;color: black">
		<tr>
			<th>slno</th>
			<th>First name</th>
			<th>Last name</th>
			<th>Phone</th>
			<th>Place</th>
			<th>Email</th>
			<th>Address</th>
		</tr>
	


<?php 

	$g="select * from `tbl_users`";
	$res=select($g);
	$slno=1;


	foreach ($res as $key) {

 ?>

<tr>
	<th><?php echo $slno++ ?></th>
	<th><?php echo $key['firstname'] ?></th>
	<th><?php echo $key['lastname'] ?></th>
	<th><?php echo $key['phone'] ?></th>
	<th><?php echo $key['place'] ?></th>
	<th><?php echo $key['email'] ?></th>
	<th><?php echo $key['address'] ?></th>
	<td><a class="btn btn-info" href="adminviewpet.php?uid=<?php echo $key['user_id'] ?>">view pets</a></td>
</tr>

<?php } ?>

</table>
</center>

<?php include 'footer.php' ?>