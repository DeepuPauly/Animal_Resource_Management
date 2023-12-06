<?php include 'adminheader.php';

extract($_GET);
$uid=$_SESSION['user_id'];

 ?>

 <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/pattikutti.jpg" alt="Image" style="height: 400px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3">Orders</h1>
                            
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
			<th>Slno</th>
			<th>Total</th>
			<th>Date</th>
			<th>Order status</th>
		</tr>

		<?php 

		$q="select * from `tbl_orders`";
		$res=select($q);
		$slno=1;


		foreach ($res as $key) {

		 ?>

		  <tr>
		  	<td><?php echo $slno++ ?></td>
		  	<td><?php echo $key['total'] ?></td>
		  	<td><?php echo $key['date'] ?></td>
		  	<td><?php echo $key['orderstatus'] ?></td>
		  	<td><a class="btn btn-info" href="adminvieworderdetails.php?oid=<?php echo $key['order_id'] ?>">details</a></td>
		  	<td><a class="btn btn-success" href="adminviewpayment.php?oid=<?php echo $key['order_id'] ?>">view payment</a></td>
		  </tr>
		<?php } ?>


	</table>
</center>


<?php include 'footer.php' ?>