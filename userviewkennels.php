<!--  -->
<?php include "userheader.php";
	extract($_GET);
	$uid=$_SESSION['user_id'];

	if (isset($_GET['kid'])) {
		extract($_GET);
		$q="select * from tbl_allocationrequest where user_id='$uid' and status='pending' and kennel_id='$kid'";
		$res=select($q);
		if (sizeof($res)>0) 
		{
			alert("already requested");
			return redirect('userviewallocationrequest.php');
			
		}

		else
		{
		$r="insert into `tbl_allocationrequest` values(null,'$kid','$uid','	amount-pending',curdate(),'pending')";
		insert($r);
		alert("Request send successfully");
		return redirect('userviewkennels.php');
		}
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
                            <h1 class="display-3 text-white mb-3">Kennels</h1>
                            
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
				<th>slno</th>
				<th>kennels name</th>
				<th>phone</th>
				<th>place</th>
				<th>email</th>
			</tr>

<?php 

	$h="select * from `tbl_kennels`";
	$res=select($h);
	$slno=1;

	foreach ($res as $key) {
 ?>

 	<tr>
 		<td><?php echo $slno++ ?></td>
 		<td><?php echo $key['kennelname'] ?></td> 
 		<td><?php echo $key['phone'] ?></td>
 		<td><?php echo $key['place'] ?></td>
 		<td><?php echo $key['email'] ?></td>
 		<td><a class="btn btn-success" href="?kid=<?php echo $key['kennel_id'] ?>"> Send allocation</a></td>
 	</tr>

<?php } ?>

		</table>
	</form>
</center>

<?php include 'footer.php' ?>