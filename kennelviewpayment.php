<?php include 'kennelheader.php';

$kid=$_SESSION['kennel_id'];

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
			<th>slno</th>
			<th>name</th>
			<th>amount</th>
			<th>date</th>
			
		</tr>

		<?php 

		 $r="select * from `tbl_payment` inner join `tbl_allocationrequest` on `tbl_payment`.paymentfor_id=`tbl_allocationrequest`.`user_id` inner join `tbl_users` using (user_id) where paymentfor_id='$kid' and `paymentfor`='kennel' group by kennel_id";
		$res=select($r);
		$slno=1;  

		foreach ($res as $key) {
		
		 ?>

		 <tr>
		 	<td><?php echo $slno++ ?></td>
		 	<td><?php echo $key['firstname'] ?></td>
		 	<td><?php echo $key['amount'] ?></td>
		 	<td><?php echo $key['date'] ?></td>
		 </tr>

		<?php } ?>
	</table>
	</form>
</center>


<?php include 'footer.php' ?>