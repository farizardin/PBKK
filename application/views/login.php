<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SIMTA</title>
	<link rel="shortcut icon" href="<?php echo base_url("assets/images/logo-100x100.png"); ?>" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css");?>"> 
	
</head>
<body style="background-image: url(<?php echo base_url('assets/images/Bunderan-ITS.jpg')?>); background-size:100%;">
	<div style="background-color:rgba(11, 58, 98, 0.68); height:47rem;">
	<div class="container">
		<div class="row" style="height: 100px">
		</div>
		<div class="row">
			<div class="col-md-4 col-xs-4"></div>
			<div class="col-md-4 col-xs-4" align="center" style="margin-top:2rem;">
				<div style="border-style: outset; border-color:orange; background-color:white; padding: 10px;height:30rem;">
					<div>
					</div>
					<br>


					<form class="form-group" action="<?php echo site_url('Signin/login_auth')?>" method="post">
							<label>Username</label>
							<input class="form-control" type="username" name="username">
							<label>Password</label><input class="form-control" type="password" name="password">
							<br>
							<button class="btn btn-outline-info btn-block " name="btnLogin">SIGN IN</button>
							<a href="<?php echo site_url('')?>">Get Back to Homepage</a></li>
							<p>Mahasiswa<br>
							<i>Username : 05111640000158<br>Pass : farizardinadhiyaksa</i>
							<p>Admin<br>
							<i>Username : admin<br>Pass : admin</i>
					</form>
				</div>
			</div>
	  	</div>
	</div>
	</div>
	
</body>
</html>