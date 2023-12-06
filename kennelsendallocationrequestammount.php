
<?php include "kennelheader.php";
	extract($_GET);
	$uid=$_SESSION['user_id'];

	if (isset($_POST['submit'])) {
		extract($_POST);

		$w="update `tbl_allocationrequest` set amount='$amount',status='ammount-allocated' where request_id='$req'";
		$res=update($w);

		alert("Amount updated successfully");
		return redirect('kennelviewallocationrequest.php');
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
                            <h1 class="display-3 text-white mb-3">Allocation</h1>
                            
<!-- ---table shows in the web page--- -->

<center>
	<form method="post">
		<tableclass="table" style="width: 500px;color: white">
			<tr>
				<th>Amount</th>
				<td><input type="number" min="1" name="amount"></td>
			</tr>
			<!-- <tr>
				<th>date</th>
				<td><input type="date" name="date"></td>
			</tr> -->
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



<?php include 'footer.php' ?>