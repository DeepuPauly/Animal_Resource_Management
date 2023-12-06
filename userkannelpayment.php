<?php include "userheader.php";

extract($_GET);

if (isset($_POST['submit'])) {
	extract($_POST);

$q="insert into `tbl_payment` values(null,'$kid','kennel','$amm',curdate())";
insert($q);
$r="update tbl_allocationrequest set status='paid' where request_id='$req'";
update($r);
alert("payment successfull");
return redirect("userviewallocationrequest.php");

}

 ?>

       <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/pattikutti.jpg" alt="Image" style="height: 900px">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3">Payment</h1>
                            
<!-- ---table shows in the web page--- -->

 <center>
    <table class="table" style="width: 500px;color: white">
    <form method="post">
    	<tr>
        <th>Cardholder Name</th>
        <td><input type="text" pattern="[a-zA-Z ]+$" id="cardholder-name" required></td>
        </tr>
        <tr>
        <th>amount</th>
        <td><input type="number" readonly value="<?php echo $amm ?>" name="amount"></td>
        </tr>
        <tr>
        <th>Card Number</th>
        <td><input type="text"  pattern="[0-9]{16}" id="card-number" required></td>
        </tr>
        <tr>
        <th>Expiration Date</th>
        <td><input type="text" id="date"  pattern="[0-9]{4}" placeholder="MM/YY" required></td>
        </tr>
        <tr>
        <th>CVV</th>
        <td><input type="text" id="cvv"  pattern="[0-9]{3}" required></td>
		</tr>
        <tr>
        	<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="submit"></td>
        </tr>
    </form>
    </table>
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