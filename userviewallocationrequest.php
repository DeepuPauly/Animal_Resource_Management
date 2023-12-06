<?php include "userheader.php"?>

     <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/pattikutti.jpg" alt="Image" style="height: 400px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3">Allocations</h1>
                            
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
	<form>
		<table class="table" style="width: 500px;color: black">
			<tr>
				<th>Slno</th>
				<th>Kennel name</th>
				<th>Phone</th>
				<th>Place</th>
				<th>Amount</th>
			</tr>
		

<?php  
		$q="select * from `tbl_kennels` inner join `tbl_allocationrequest` using(kennel_id)";
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
			<?php if ($key['status']=="ammount-allocated") {
			 ?>
			 <td><a class="btn btn-success" href="userkannelpayment.php?kid=<?php echo $key['kennel_id'] ?>&amm=<?php echo $key['amount'] ?>&req=<?php echo $key['request_id'] ?>">Make payment</a></td>
			<?php } ?>
		</tr>

	<?php } ?>
	</table>
	</form>
</center>



<?php include "footer.php" ?>