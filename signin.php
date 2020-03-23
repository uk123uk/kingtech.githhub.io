<!DOCTYPE html>
<html lang="eng">
<head>
	<title>Signin</title>
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

				<button id="barbtn1" data-target="" class="navbar-toggler" type="button" data-toggle="collapse">
					<span id=""  class="navbar-toggler-icon"></span>
				</button>

				<button id="barbtn2" data-target="" class="navbar-toggler" type="button" data-toggle="collapse">
					<span id=""  class="navbar-toggler-icon"></span>
				</button>

				<div id="navbarmenu" class="navbarmenu collapse text-center font-weight-italic  navbar-collapse " 
				>

					<ul class="navbar-nav ml-auto p-2 text-uppercase">
						<li class="nav-item" >
							<a href="index.php"  class="active menu nav-link " >Home</a>
						</li>
						<li class="nav-item">
							<a href="sourceCode.php.#calculatorcode" class="menu nav-link ">SourceCode</a>
						</li>
			
						<li class="nav-item">
							<a href="about.php.#aboutHome" class=" menu nav-link ">About</a>
						</li>
						<li class="nav-item">
							<a href="contact.php.#contacthome" class=" menu nav-link ">Contact</a>
						</li>
						<li class="nav-item">
							<a href="signin.php.#signin-div" class=" menu nav-link ">Sign in</a>
						</li>
					</ul>
				</div>

				

				</div>
			</nav>

			<div id="navMoblie" class="font-weight-italic text-center">

				<ul class="navbar-nav ml-auto p-2 text-uppercase">
						<li class="nav-item" >
							<a href="index.php"  class="active menu nav-link " >Home</a>
						</li>
						<li class="nav-item">
							<a href="sourceCode.php.#calculatorcode" class="menu nav-link ">SourceCode</a>
						</li>
			
						<li class="nav-item">
							<a href="about.php.#aboutHome" class=" menu nav-link ">About</a>
						</li>
						<li class="nav-item">
							<a href="contact.php.#contacthome" class=" menu nav-link ">Contact</a>
						</li>
						<li class="nav-item">
							<a href="signin.php.#signin-div" class=" menu nav-link ">Sign in</a>
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
	
		<div id="signin-div" class="signin-div container">
			<form action="signin.php" method="post">
			<h3>Sign in Now</h3><br><br>
			<label>Username</label>
			<input type="text" name="signin-name" class="form-control" placeholder="...">

				<label>Email*</label>
			<input type="text" name="signin-Email" class="form-control" placeholder="...">

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
					<label>Password</label>
					<input type="Password" name="signin-Password" class="form-control" placeholder="...">

				</div>

				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
					<label>Confirm</label>
					<input type="Password" name="signin-Confirm" class="form-control" placeholder="...">
				</div>
			</div>
				
			<br><br>

			<!-- <input type="button" name="submit-signin" value="Sign now" class="submit-signin btn bg-success text-dark"> -->
			<button name="submit-signin" class="submit-signin btn bg-success text-dark">Sign now</button>
			<br><br>
			</form>
		</div><hr><hr>
<?php
		$con=mysql_connect('localhost','root','','youtubedata');

				if (isset($_POST['submit-signin'])) {
					$Username=$_POST['signin-name'];
					$email=$_POST['signin-Email'];
					$Password=$_POST['signin-Password'];
					$Confirm=$_POST['signin-Confirm'];

					if($Username=="" or $email=="" or $Password=="" or $Confirm==""){
							echo "<script>alert('Any fields is empty!!!'')</script>";
							exit();
					}
					// if ($Password!==$Confirm) {
					// 		echo "<script>alert('Password are not Matche!!!'')</script>";
					// 		exit();
					// }


					$insert="INSERT INTO `youtubedata`.`signin` (`username`, `email`, `password`, `confirme`) VALUES ('$Username', '$email', '$Password', '$Confirm')";
					
					if (mysql_query($insert)) {
						// $sendmail=mail($email,'Thanks',"Welcome "+$Username+" in KING TECH.COM...here you can download easly sourcecode of our youtube videos and make your own game and websites and apps, if you want so connect always with us by this websites");
						// if (mysql_query($sendmail)) {
							echo "<script>alert('Sign in successfully***')</script>";
						// }
						// else{echo "<script>alert('Damn some error you have!!')</script>";}
					}
					else{
						echo "<>scriptalert('Sign in Failed')</script>";
					}


				}

?>
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
</section>	
</body>
</html>
