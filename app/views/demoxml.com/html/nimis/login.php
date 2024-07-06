<?php


?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="app/views/demoxml.com/html/nimis/login-form-20/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(app/views/demoxml.com/html/nimis/login-form-20/images/bg.jpg); padding-bottom: 200px;">
	<section class="ftco-section">
		<div class="container" >
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<!-- <h2 class="heading-section">Login #10</h2> -->
				</div>
			</div>
			<div class="row justify-content-center" style="align-items: center;">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>

				  <?php
			  $login_err="";
			 
			  if(isset($_POST['login_username'])&&isset($_POST['login_password'])){
				$check_user = checkuser($_POST['login_username'], $_POST['login_password']);
				if ($check_user) {
					$_SESSION['id_nguoi_dung']=$check_user['id_nguoi_dung'];
					$_SESSION['user']=$_POST['login_username'];
					$_SESSION['pass']=$_POST['login_password'];
					header("location:/index.php");
				
				} else{
					$login_err="Tên tài khoản hoặc mật khẩu không đúng.";
				}
			}
			  ?>
		      	<form action="index.php?act=dangnhap" class="signin-form" method="post">
		      		<div class="form-group">
					  <input type="text" class="form-control" placeholder="Username" required name="login_username">
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" required name="login_password">
				  
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
				<?php echo $login_err??'' ?>
				
	            <div class="form-group">
					<button type="submit" class="form-control btn btn-primary submit px-3" name="dangnhap">Sign In</button>
	            	
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="sigup.php" style="color: #fff">Sign Up</a>
								</div>
								
	            </div>
	          </form>
			  
	          <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="app/views/demoxml.com/html/nimis/login-form-20/js/jquery.min.js"></script>
  <script src="app/views/demoxml.com/html/nimis/login-form-20/js/popper.js"></script>
  <script src="app/views/demoxml.com/html/nimis/login-form-20/js/bootstrap.min.js"></script>
  <script src="app/views/demoxml.com/html/nimis/login-form-20/js/main.js"></script>

	</body>
</html>

