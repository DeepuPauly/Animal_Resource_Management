<?php include 'adminheader.php';
extract($_GET);

if (isset($_POST['submit'])) {
	extract($_POST);

	$q="update `tbl_complaints` set reply='$sendreplay' where complaint_id='$cid'";
	$res=update($q);
	alert("updated successfully");
	return redirect("adminviewcomplaint.php");
}

 ?>  

 <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3">Replay</h1>
                            
<!-- ---table shows in the web page--- -->

<center>
	<form method="post">
		<table class="table" style="width: 500px;color: white">
			<tr>
				<th>send replay</th>
				<td><input type="text" class="form-control" name="sendreplay"></td>
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


<?php include 'footer.php' ?>