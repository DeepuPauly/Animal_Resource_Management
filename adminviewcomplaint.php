<?php include "adminheader.php" ?>


<!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/pattikutti.jpg" alt="Image" style="height: 400px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3">View complaint</h1>
                            
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
			<th>Date</th>
			<th>Complaint</th>
			<th>Reply</th>
			
		</tr>

		<?php 

		$s="select * from `tbl_complaints`";
		$res=select($s);
		$slno=1; 


		foreach ($res as $key) {
			
		 ?>
		 	<tr>
		 		<th><?php echo $slno++ ?></th>
		 		<th><?php echo $key['date'] ?></th>
		 		<th><?php echo $key['complaint'] ?></th>
		 		

		 		<?php if ($key['reply']=='pending') {
		 			# code...
		 		 ?>
		 		<th><a class="btn btn-success" href="admincomplaintreplay.php?cid=<?php echo $key['complaint_id']?>">reply</a></th>  

		 	<?php }else{ ?>

		 		<th><?php echo $key['reply'] ?></th>
		 		<?php } ?>
		 	</tr>



		<?php } ?>
	</table>
</center>

<?php include "footer.php" ?>