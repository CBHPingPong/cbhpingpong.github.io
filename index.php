<!DOCTYPE html>
<html>
  <!-- Trang web được lập trình bởi Dương Tùng Anh - C4K60 Chuyên Hà Nam -->
<!-- Mọi thông tin chi tiết xin liên hệ https://facebook.com/tunnaduong/ -->
<html>
	<head>
    	<link href="/style.css" rel="stylesheet">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		  
<meta name="description" content="Cổng thông tin điện tử CLB Bóng bàn THPT Chuyên Hà Nam">
  <meta name="author" content="">

		<!-- Bộ mã Bootstrap 4 -->
    	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

		<!-- Bộ mã jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

		<!-- Bộ mã Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

		<!-- Bộ mã JavaScript cho Bootstrap 4 -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<!-- Bộ mã riêng cho giao diện trang web -->
    	<link href="https://v4-alpha.getbootstrap.com/examples/narrow-jumbotron/narrow-jumbotron.css" rel="stylesheet">
    	<link rel="stylesheet" href="style.css">
    	<!-- Bộ mã Font Awesome -->
    	<script src="https://kit.fontawesome.com/5468db3c8c.js" crossorigin="anonymous"></script>

		<title>CPC - CBH Ping Pong Club</title>
		<style type="text/css">

		#bg {
			position:fixed; 
			top:0%; 
			left:0%; 
			width:100%; 
			height:100%;
		}
		#bg img {
			position:absolute; 
			top:0; 
			left:0; 
			right:0; 
			bottom:0; 
			margin:auto; 
			min-width:50%;
			min-height:50%;
		}
		
		#page-wrap { position: relative; z-index: 2; width: 400px; margin: 50px auto; padding: 20px; background: white; -moz-box-shadow: 0 0 20px black; -webkit-box-shadow: 0 0 20px black; box-shadow: 0 0 20px black; }
		p { font: 15px/2 Georgia, Serif; margin: 0 0 30px 0; text-indent: 40px; }
	@media screen and (max-width: 768px) {
	#page-wrap {
  zoom: 0.7;
}
}
		</style>
	</head>
	<body>
		<center>

<div id="page-wrap" style="
    width: 500px;
">
		<a href="/"><img src="/logo.png" width="200"></a>
		<h1>CPC - CBH Ping Pong Club</h1>
		<button type="button" onclick="WhoWeAre()" class="btn btn-outline-primary btn-lg" style="margin-bottom: 5px;"><i class="fas fa-question"></i> Chúng mình là ai?</button>
		<br />
		<button type="button" onclick="SignUp()" class="btn btn-outline-primary btn-lg" style="margin-bottom: 5px;"><i class="fas fa-user-plus"></i> Đăng ký trở thành thành viên CLB</button>
		<br />
		<button type="button" onclick="Terms()" class="btn btn-outline-primary btn-lg" style="margin-bottom: 5px;"><i class="fas fa-users"></i> Phương hướng hoạt động và quy chế CLB</button>
		<br />
		<button type="button" onclick="News()" class="btn btn-outline-primary btn-lg"><i class="far fa-newspaper"></i> Tin tức</button>
		<button type="button" onclick="Photos()" class="btn btn-outline-primary btn-lg"><i class="fas fa-photo-video"></i> Thư viện ảnh</button>
		<br /><br />
		<a href="https://facebook.com/CBHPingPongClub"><i class="fab fa-facebook"></i>     </a><a href="https://instagram.com/CBHPingPong"><i class="fab fa-instagram"></i>     </a> <a href="https://github.com/CBHPingPong/"><i class="fab fa-github"></i></a>
		<h6><i class="fas fa-code" aria-hidden="true"></i> with <i class="fas fa-heart" aria-hidden="true"></i> by <a href="https://fb.me/tunnaduong">Dương Tùng Anh</a></h6>
		</div>
		<div id="bg">
			<img src="bg.jpg" id="bg" alt="">
		</div>
		<script type="text/javascript">
			function WhoWeAre() {
				location.href = "/WhoWeAre";
			}
			function SignUp() {
				location.href = "/SignUp";
			}
			function Terms() {
				location.href = "/terms";
			}
			function News() {
				location.href = "/News";
			}
			function Photos() {
				location.href = "/photos";
			}
		</script>
		</center>
	</body>