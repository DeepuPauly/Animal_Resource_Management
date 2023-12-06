<?php include 'shopheader.php';

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
                            <h1 class="display-3 text-white mb-3">Payments</h1>
                            
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
			<th>Name</th>
			<th>Amount</th>
			<th>Date</th>
			
		</tr>

		<?php 

		$r="select * from `tbl_payment` inner join `tbl_orders` on `tbl_payment`.paymentfor_id=`tbl_orders`.order_id inner join `tbl_users` using (user_id) where paymentfor_id='$oid' and `paymentfor`='petproduct' group by order_id";
		$res=select($r);
		$slno=1;  

		foreach ($res as $key) {
		
		 ?>

		 <tr>
		 	<td><?php echo $slno++ ?></td>
		 	<td><?php echo $key['firstname'] ?></td>
		 	<td><?php echo $key['total'] ?></td>
		 	<td><?php echo $key['date'] ?></td>
		 </tr>

		<?php } ?>
	</table>
	</form>
</center>


<?php include 'footer.php' ?>