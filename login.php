<?php include 'publicheader.php';

if (isset($_POST['submit'])) {
	extract($_POST);
	$a="select * from `tbl_login` where `username`='$username' and `password`='$Password'";
	$res=select($a);

	if (sizeof($res)>0) 
	{
		$_SESSION['login_id']=$res[0]['login_id'];
		$lid=$_SESSION['login_id'];
		if ($res[0]['usertype']=="admin")  		
		{
	  return redirect('adminhome.php');
	   }
	   elseif ($res[0]['usertype']=="user")
	   {
	   	
	   	$aa="select * from `tbl_users` where `login_id`='$lid'";
	   	$res=select($aa);
	   	if (sizeof($res)>0) 
	   	{
	   		$_SESSION['user_id']=$res[0]['user_id'];
	   		$uid=$_SESSION['user_id'];
	   		return redirect('userhome.php');
	   	}
	   	
	   }
	   elseif ($res[0]['usertype']=="shop")
	    {
	   	echo$bb="select * from `tbl_shop` where `login_id`='$lid'";
	   	$res=select($bb);
	   	if (sizeof($res)>0)
	   	 {
	   		$_SESSION['shop_id']=$res[0]['shop_id'];
	   		$sid=$_SESSION['shop_id'];
	   		return redirect('shophome.php');
	   	}
	   	
	   }
	   elseif ($res[0]['usertype']=='kennel')
	   {
	   	$cc="select * from `tbl_kennels` where `login_id`='$lid'";
	   	$res=select($cc);
	   	if (sizeof($res)>0) 
	   	{
	   		$_SESSION['kennel_id']=$res[0]['kennel_id'];
	   		$kid=$_SESSION['kennel_id'];
	   		return redirect('kennelhome.php');
	   	}

	   }
	}

	alert("login successfully");
 	return redirect("login.php");
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
                            <h1 class="display-3 text-white mb-3">Login</h1>
                            
<!-- ---table shows in the web page--- -->
<center>
	<form method="post">
		<table>
			<tr>
				<th>User name</th>
				<td><input type="text" name="username" class="form-control" required=""></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="Password" name="Password" class="form-control" required=""></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="submit" class="btn btn-success"></td>
			</tr>
		</table>
		
	</form>
</center>      

<!-- ---table shows in the web page--- -->

<!-----table shows in the web page----->
 </div>
                    </div>
                </div>
               
            </div>

        </div>
    </div>
    <!-- Carousel End -->



<?php include 'footer.php' ?>