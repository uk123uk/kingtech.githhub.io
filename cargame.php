<!DOCTYPE html>
<html lang="eng">
<head>
	<title>CARGAME</title>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="strape/boot.css">
	<link rel="stylesheet" type="text/css" href="css/index_style.css">
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript" src="jquery/bootstrap.bundle.js"></script>
	<script type="text/javascript" src="jquery/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="jquery/bootstrap.min.js"></script>
	<script type="text/javascript" src="jquery/bootstrap.js"></script>
	<script type="text/javascript" src="jquery/tt_slideshow.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#barbtn1').click(function(){
				$('#navMoblie').slideDown();
				$(this).hide();
				$('#barbtn2').show();
			})
			$('#barbtn2').click(function(){
				$('#navMoblie').slideUp();
				$(this).hide();
				$('#barbtn1').show();
			})

		})
	</script>

</head>
<body>
	<section class="main">
		<div class="toppicture">
			<nav class="navbar navbar-expand-md  navbar-dark">
				<div class="container">
				<a href="" style="text-shadow: 2px 0px 2px darkorange;filter:brightness(2);" class="navbar-brand text-primary font-weight-bold">KING TECH.COM</a>

				<button id="barbtn1" data-target="#navbarmenu" class="navbar-toggler" type="button" data-toggle="collapse">
					<span id=""  class="navbar-toggler-icon"></span>
				</button>

				<button id="barbtn2" data-target="#navbarmenu" class="navbar-toggler" type="button" data-toggle="collapse">
					<span id=""  class="navbar-toggler-icon"></span>
				</button>

				<div id="navbarmenu" class="navbarmenu collapse text-center font-weight-italic  navbar-collapse " 
				>

					<ul class="navbar-nav ml-auto p-2 text-uppercase">
						<li class="nav-item" >
							<a href=""  class="active menu nav-link " >Home</a>
						</li>
						<li class="nav-item">
							<a href="" class="menu nav-link ">SourceCode</a>
						</li>
			
						<li class="nav-item">
							<a href="" class=" menu nav-link ">About</a>
						</li>
						<li class="nav-item">
							<a href="" class=" menu nav-link ">Contact</a>
						</li>
						<li class="nav-item">
							<a href="" class=" menu nav-link ">Sign in</a>
						</li>
					</ul>
				</div>

				

				</div>
			</nav>

			<div id="navMoblie" class="font-weight-italic text-center">

					<ul class="navbar-nav ml-auto p-2 text-uppercase">
						<li class="nav-item" >
							<a href="" id="active" class="nav-link text-white" >Home</a>
						</li>
						
						<li class="nav-item">
							<a href="" class="nav-link">SourceCode</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link">About</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link">Contact</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link">Sign in</a>
						</li>
					</ul>
				</div>
				<div class="welcome_div">
				<h4  class="welcome-text text-uppercase  font-weight-bold">welcome To KING TECH.COM</h4>
				<br><br><br><br><br><br><br>
				<button class="subscribe btn"><a href="#" class="text-dark">SUBCRIBE</a></button>
				&nbsp;
				<button class="signi btn-sm "><a href="#" class="text-white">SIGN IN</a></button>
				
				</div>
		</div><br><hr><hr><br>
		<div id="sourcecode" class="source Code">
				<h2 class="sourcecodeHeding text-center font-weight-bold">SourceCode</h2>
				<div class="detailCoding container">
					<h3>Car Game SourceCode</h3>
					<p>
						ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>

					<div id="demo" class="carousel slide" data-ride="carousel">
						<ul class="carousel-indicators">
							<li data-target="#demo" data-slide-to="0" class="active"></li>
							<li data-target="#demo" data-slide-to="1"></li>
							<li data-target="#demo" data-slide-to="2"></li>
						</ul>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="row">
									<div class="col-lg-12 col-md-12 col-12">
											<img src="icon_img/car22.png" class="codeimg">
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="row">
									<div class="col-lg-12 col-md-12 col-12">
											<img src="icon_img/car1.png" class="codeimg">
									</div>
								</div>
							</div>
							<div class="carousel-item">
							<div class="row">
									<div class="col-lg-12 col-md-12 col-12">
										<img src="icon_img/car22.png" class="codeimg">
									</div>
								</div>
							</div>
						</div>

						<a href="#demo" class="carousel-control-prev" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</a>

						<a href="#demo" class="carousel-control-next" data-slide="next">
							<span class="carousel-control-next-icon "></span>
						</a>

					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-12">
							<p>
								 ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-12">
							<p>
								 ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
					</div>

					<center>
					<h5 class="font-weight-bold text-warning">Free Download Car Game SourceCode</h5>
					<br>
					<a href="file/carGame.rar" style="text-decoration: none;" class="download_btn">Free Download</a>
					</center>

					
		</div>
		<br><br><br><br><br><br>
				<div class="relatedPost container">
					<h3 class="text-center font-weight-bold text-primary">Related Code</h3>
					<hr>
					<br>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-3 col-6">
							<div class="box relatedimage" style="border:solid 5px black;margin-bottom: 10px;">
								<a style="text-decoration: none;" href="index.php.#calculatorcode"><img src="icon_img/Calculator3.png" class="img-fluid img-thumbnail">
								<h6  id="relatedname">Free Car Game</h6></a>
							</div>
						</div>
						
					</div>
					<hr>
				</div>
			</div>

		

						<div class="footer">
				<div class="container">
					<div class="row">

						<div class="col-lg-4 col-md-4 col-sm-12  col-12">
							<br><br>
							<h6>KING TECH.COM!</h6>
							<p>It's a best website for bigenire to learn game development website designing and website hosting etc,we are the website developer and game builder if you want learn so subsribe first. </p>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12  col-12">
							<br><br>
							<div class="aboutfooter">
							<h6>Our About</h6>
							<span><img src="icon_img/instagram.png"><h5>Instagram</h5></span>
							<img src="icon_img/facebook.png"><h5>Facebook</h5>
							<img src="icon_img/twitter.png"><h5>Twitter</h5>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12  col-12">
							<br><br>
							<div class="footerAddress">
									<h6>Address</h6>
									<p>Mohallah Shegah Dhok Tordher Swabi Pakistan Near Gt Road<br><br>
										<b>Phone Nummber :</b>0301-1487633<br><br>
										<b>Email :</b>umairkhan123king@gmail.com
									</p>

							</div>
						</div>
						
					</div>
					</div>

			</div>






	<!-- 	<div class="progress w-100">
					
					<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 40%;height: 20px;">
						100%
					</div>	
		</div> -->

</section>	
</body>
</html>
