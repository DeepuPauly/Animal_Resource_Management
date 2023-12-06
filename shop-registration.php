<?php include 'publicheader.php';

// ----for submit button clicking-----
	if (isset($_POST['submit'])) {
		extract($_POST);
//---for inserting into the sql login table---
		$b="insert into `tbl_login` values(null,'$username','$password','shop')";
		$ltb=insert($b);
//---for inserting values into the shop registration table---
		$c="insert into `tbl_shop` values(null,'$ltb','$shopname','$place','$phone','$email')";
		insert($c);
		alert("registration completed");
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
                            <h1 class="display-3 text-white mb-3">Shop registration</h1>
                            
<!-- ---table shows in the web page--- -->
<center>
	<form method="post">
		
		<table class="table" style="width: 500px;color: white">
			<tr>
				<th>shop name</th>
				<td><input type="text" name="shopname" pattern="[a-zA-Z ]+$" class="form-control" required=""></td>
			</tr>
			<tr>
				<th>place</th>
				<td><input type="text" name="place" class="form-control" required=""></td>
			</tr>
			<tr>
				<th>phone</th>
				<td><input type="text" name="phone" pattern="[0-9]{10}" class="form-control" required=""></td>
			</tr>
			<tr>
				<th>email</th>
				<td><input type="email" name="email" class="form-control" required=""></td>
			</tr>
			<tr>
				<th>username</th>
				<td><input type="text" name="username" class="form-control" required=""></td>
			</tr>
			<tr>
				<th>password</th>
				<td><input type="password" name="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  class="form-control" required=""></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="submit" class="btn btn-success"></td>
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