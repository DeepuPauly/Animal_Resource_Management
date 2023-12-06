<?php include 'userheader.php';

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
                            <h1 class="display-3 text-white mb-3">Cart</h1>
                            
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
			<th>slno</th>
			<th>total</th>
			<th>date</th>
			<th>order status</th>
		</tr>

		<?php 

		$q="select * from `tbl_orders` where user_id='$uid'";
		$res=select($q);
		$slno=1;


		foreach ($res as $key) {

		 ?>

		  <tr>
		  	<td><?php echo $slno++ ?></td>
		  	<td><?php echo $key['total'] ?></td>
		  	<td><?php echo $key['date'] ?></td>
		  	<td><?php echo $key['orderstatus'] ?></td>

<?php if ($key['orderstatus']=='pending'){?>


		  	<td><a class="btn btn-info" href="uservieworderdetails.php?oid=<?php echo $key['order_id'] ?>">details</a></td>
		  	<td><a class="btn btn-success" href="usermakepayment.php?oid=<?php echo $key['order_id'] ?>&tol=<?php echo $key['total'] ?>">Make Payment</a></td>
		  <?php } else {  ?>


		  	<td><a class="btn btn-info" href="uservieworderdetails.php?oid=<?php echo $key['order_id'] ?>">details</a></td>

		  <?php } ?>


		  </tr>



		<?php } ?>


	</table>
</center>


<?php include 'footer.php' ?>