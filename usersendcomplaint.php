<?php include 'userheader.php';
$uid=$_SESSION['user_id']; 
extract($_GET);

if (isset($_POST['submit'])) {

	extract($_POST);

	$q="insert into `tbl_complaints` values(null,'$uid','$complaint','pending',curdate())";
	insert($q);
	alert("complaint send successfully");
	return redirect("usersendcomplaint.php");
} 


 ?>

       <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/pattikutti.jpg" alt="Image" style="height: 800px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3">Complaints</h1>
                            
<!-- ---table shows in the web page--- -->

<center>
	<form method="post">
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>Complaint</th>
			<td><input type="textbox" class="form-control" required=""  name="complaint"></td>
		</tr>
		
		<tr>
			<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="submit"></td>
		</tr>
	</table>
	</form>
</center>

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
			<th>  Slno </th>
			<th> Complaints  </th>
			<th> Replay  </th>
			<th>  Date  </th>
		</tr>

		<?php 

		$q="select * from `tbl_complaints` where user_id='$uid' ";
		$res=select($q);
		$slno=1;

		foreach ($res as $key) {
			
			?>

			<tr>
				<td><?php echo $slno++ ?></td>
				<td><?php echo $key['complaint']?></td>
				<td><?php echo $key['reply'] ?></td>
				<td><?php echo $key['date'] ?></td>
			</tr>



		<?php } ?>
	</table>
</center>




<?php include 'footer.php' ?>