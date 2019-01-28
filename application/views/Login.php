<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Masuk.kuy! </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="<?=base_url()?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>assets/img/iconn.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=base_url()?>assets/img/iconn.png">
</head>
<style media="screen">
body{
	background-image: url(assets/img/123.jpg);
	background-position: cover;
	background-repeat: no-repeat;
	b
}
	.content{
		margin-top: -490px;
	}

	.hayo{
		margin-top: -280px;
		margin-left: 50px;
		color: white;
		position: absolute;
	}

	.right{
		background-color: #EFBFA8;
	}

	.auth-box{
		width: 400px;
		padding: 25px;
		background-color: rgba(181, 231, 234, 0.2);
	}

	.remember{
		position: center;
	}

	.logo img{
		margin-top: 40px;
	}
</style>
<body>

	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="<?=base_url()?>assets/img/logo.png" alt="Klorofil Logo"></div>
								<p class="lead">Login to your account</p>
							</div>
							<form class="form-auth-small" action="index.php/user/Login" method="post">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Username</label>
									<input type="text" class="form-control" placeholder="Username" name="Username" value="">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" placeholder="Password" name="Password" value="">
								</div>
								<br>
								<!-- <div class="form-group clearfix" class="remember">
									<label class="fancy-checkbox element-left">

										<span >Remember me</span>
									</label>
								</div> -->
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
								</div>
							</form>
						</div>
					</div>
					<!-- <div class="right">
						<div class="overlay"></div>
						<div class="hayo">
							<h1 class="heading">Silahkan Masukkan Dengan Benar</h1>
							<p>By Clarissa S R</p>
						</div>
					</div> -->
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>



  <!-- <div class="input-group no-border form-control-lg">
    <span class="input-group-prepend">
      <div class="input-group-text">
        <i class="fa fa-user"></i>
      </div>
    </span>
    <input type="text" class="form-control" placeholder="Username" name="Username" value="">
  </div>

  <div class="input-group no-border form-control-lg">
    <span class="input-group-prepend">
      <div class="input-group-text">
        <i class="fa fa-user"></i>
      </div>
    </span>
    <input type="password" class="form-control" placeholder="Password" name="Password" value="">
  </div>
</div>
<div class="card-footer" style="margin-top:-20px;">
  <button type="submit" class="btn btn-primary btn-round btn-lg btn-block mb-3"> <i class="fa fa-sign-in"></i> Login </button>

</div> -->
