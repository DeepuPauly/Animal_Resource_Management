<?php include 'userheader.php';

$uid=$_SESSION['user_id'];

extract($_GET);

if (isset($_POST['submit'])) 
{
	extract($_POST);

	$qr="SELECT * FROM `tbl_orders` WHERE `user_id`='$uid' AND `orderstatus`='pending'";
	$result=select($qr);
	if (sizeof($result)>0)
	{

		$tamt=$result[0]['total'];
		$order_master_id=$result[0]['order_id'];

		$s="select * from `tbl_orderdetails` where product_id='$pid' and order_id='$order_master_id'";
		$res=select($s);

		if (sizeof($res)>0) 
		{

			$odid=$res[0]['detail_id'];

			$g="update tbl_orders set total=total+'$total' where order_id='$order_master_id'";
			update($g);

			$y="update tbl_orderdetails set quantity=quantity+'$quantity' where detail_id='$odid'";
			update($y);
		}
		else
		{
		
		$q="update tbl_orders set total=total+'$total' where order_id='$order_master_id'";
		update($q);

		$p="insert into tbl_orderdetails values(null,'$pid','$order_master_id','$quantity','$amm')";
		insert($p);

		}
	}
	else
	{

	$e="insert into tbl_orders values(null,'$uid','$total',curdate(),'pending')";
	$res=insert($e);


	$p="insert into tbl_orderdetails values(null,'$pid','$res','$quantity','$amm')";
	insert($p);

	}
	alert("buy successfully");
	return redirect("uservieworder.php");

}
 ?>

 <script type="text/javascript">
	function TextOnTextChange()
	{
		var x =document.getElementById("p_amount").value;
		var y =document.getElementById("p_qnty").value;
		
		document.getElementById("t_amount").value = x * y;
	}
   
</script>

 <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3">Buy Product</h1>
                            
<!-- ---table shows in the web page--- -->

<center>
	<form method="post" enctype="multipart/form-data">

		<table class="table" style="width: 500px;color: white">
			<tr>
			<td><img src="<?php echo $img ?>" width="100" height="100"></td>
		</tr>
		<tr>
			<th>Product name</th>
			<td><input type="text"  value="<?php echo $pnm ?>"  required="" class="form-control" name="productname"></td>
		</tr>
		<tr>
			<th>Amount</th>
			<td><input type="number" id="p_amount" readonly value="<?php echo $amm ?>" name="amount"></td>
		</tr>
		<tr>
			<th>Quantity</th>
			<td><input type="number"  onchange="TextOnTextChange()" id="p_qnty" class="form-control" required="" min="1" name="quantity"></td>
		</tr>
		<tr>
			<th>Total</th>
			<td><input type="text" readonly  id="t_amount" required="" name="total"></td>
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