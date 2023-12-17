<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN</title>
	<!--CSS-->
	<link rel="stylesheet" href="assets/css/style_login.css">
	<!--Font Awesome-->
	<link rel="stylesheet" href="assets/fontawesome-free-6.5.0-web/css/all.css">
	<!-- JQUERY-->
	<script src="assets/js/jquery.js"></script>
</head>
<body>
<div class="container">
	<div class="bingkai-logo">
		<div class="logo"><a href="#"><img src="assets/img/logo dailytos.png" alt="Logo-DailyThos"></a></div>
	</div>
	
	<div class="bingkai-login">
		<div class="login-hero"><img src="assets/img/hero-login.png" alt="hero login"></div>
		<div class="login-content">
			<div class="judul"><h1>LOGIN</h1></div>
			<!-- Alert  username dan password tidak tersedia-->
			<div class="alert-notaviable-usernameDanpassword"><p>Maaf, Akun Tidak  Tersedia!!</p></div>
			<!-- Alert  username salah -->
			<!--<div class="alert-false-username"><p>Maaf, Username Salah!!</p></div>-->
			<!-- Alert  password salah -->
			<!--<div class="alert-false-password "><p>Maaf, Password Salah!!</p></div>-->
			
			<div class="content">
			 	<p class="cont nama-input">Username</p>
				<p class="cont"><input type="text" name="#" id="#" placeholder="Input  Username"></p>
				<p class="cont nama-input">Password </p>
				<p class="cont"><input type="password" name="#" id="form-password" placeholder="Input Password"> <span class="eye"><i class="fa-regular fa-eye fa-sm"></i></span></p>
				<p class="lupa-pass"><a href="#">Lupa Password?</a></p>
				<p><a href="index.php"><input type="submit" value="Masuk"></a></p>
				<p class="note">Belum memiliki akun? silahkan menghubungi <a href="#">admin</a></p>
			</div>
		</div>
	</div>
</div>

	<script>
		$(".content").on('click','.fa-regular',function(){
			var typeInput = $('#form-password');
			if (typeInput.attr("type") === "password") {
					typeInput.attr("type","text");
				}else{
					typeInput.attr("type","password");
				}
		});

		//Test Alert
		$(document).ready(function(){
			$('.judul').click(function(){
				$('.alert-notaviable-usernameDanpassword').toggle();
			});
		});
	</script>	
</body>
</html>


