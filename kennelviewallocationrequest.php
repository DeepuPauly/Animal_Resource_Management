<?php include 'kennelheader.php';

$kid=$_SESSION['kennel_id'];

extract($_GET);

if (isset($_GET['acc'])) {
	extract($_GET);




	$f="update `tbl_allocationrequest` set status='accept' where request_id='$acc'";
	update($f);
	alert("accepted successfully");
}

if (isset($_GET['rej'])) {
	extract($_GET);

	$g="update `tbl_allocationrequest` set status='reject' where request_id='$rej'";
	delete($g);
	alert("rejected successfully");
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
                            <h1 class="display-3 text-white mb-3">Kennel Allocation</h1>
<!-----table shows in the web page----->
 </div>
                    </div>
                </div>
               
            </div>

        </div>
    </div>
    <!-- Carousel End -->

<center>
	<form>
		<table class="table" style="width: 500px;color: black">
			<tr>
				<th>Slno</th>
				<th>Kennel name</th>
				<th>Phone</th>
				<th>Place</th>
				<th>Amount</th>
				<th>Status</th>
			</tr>
		

<?php  
		$q="select * from `tbl_kennels` inner join `tbl_allocationrequest` using(kennel_id) where kennel_id='$kid'";
		$res=select($q);
		$slno=1;

		foreach ($res as $key) {

		?>

		<tr>
			<td><?php echo $slno++ ?></td>
			<td><?php echo $key['kennelname'] ?></td>
			<td><?php echo $key['phone'] ?></td>
			<td><?php echo $key['place'] ?></td>
			<td><?php echo $key['amount'] ?></td>
			<td><?php echo $key['status'] ?></td>
			<td><a class="btn btn-info" href="kennelviewpet.php?uid=<?php echo $key['user_id'] ?>">view pets</a></td>
			<td><a href="?kid=<?php echo $key['kennel_id'] ?>"></a></td>

			<?php if ($key['status']=="pending") {
				?>
			<td><a class="btn btn-success" href="?acc=<?php echo $key['request_id'] ?>">accept</a></td>
			<td><a class="btn btn-danger" href="?rej=<?php echo $key['request_id'] ?>">reject</a></td>

		    <?php } elseif ($key['status']=="accept") {
			 ?>

			 <td><a class="btn btn-success" href="kennelsendallocationrequestammount.php?req=<?php echo $key['request_id'] ?>">Amount</a></td>
			<?php }elseif ($key['status']=="paid") {
		 	?>

		 <td><a class="btn btn-info" href="kennelviewpayment.php?kid=<?php echo $key['kennel_id'] ?>">view payment</a></td>

		<?php } ?>
		
		</tr>

	<?php } ?>

	</table>
	</form>
</center>


<?php include 'footer.php' ?>