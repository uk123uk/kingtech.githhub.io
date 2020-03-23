<!DOCTYPE html>
<html lang="eng">
<head>
	<title>Contact</title>
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
			
				<div id="contacthome" class="contacthome container">
				<h2 class="contacthomeheading">Contact Us</h2><br><br>
				<form action="contact.php" method="post">
					<label>Name</label><input type="text" name="name" placeholder="..." class="form-control"><br>

					<label>Email*</label><input type="email" name="email" placeholder="..." class="form-control"><br>

					<label>Subject</label><input type="text" name="subject" placeholder="..." class="form-control"><br>

				<label>Messege</label><textarea class="form-control" name="messege" placeholder="..."></textarea><br><br>

				<!-- <input type="button" id="submit-contact" name="submit-contact" value="Send messege" class="btn bg-primary text-dark"><br><br> -->
				<button id="submit-contact" class="btn bg-primary text-dark" name="submit-contact">Send messege</button><br><br>
				</form>

			</div>
			<hr><hr><br><br>
			<?php

				$con=mysql_connect('localhost','root','','youtubedata');

				if (isset($_POST['submit-contact'])) {
					$name_contacter=$_POST['name'];
					$email_contacter=$_POST['email'];
					$subject_contacter=$_POST['subject'];
					$messege_contacter=$_POST['messege'];

					if($name_contacter=="" or $email_contacter=="" or $subject_contacter=="" or $messege_contacter==""){
						echo "<script>alert('Any fields is empty!!!'')</script>";
						exit();
					}

					// $insert="insert into contactdata(name,email,subject,messege) values('$name_contacter','$email_contacter','$subject_contacter','$messege_contacter')";

					$insert="INSERT INTO `youtubedata`.`contactdata` (`name`, `email`, `subject`, `messege`) VALUES ('$name_contacter', '$email_contacter', '$subject_contacter', '$messege_contacter')";

					if (mysql_query($insert)) {
					
					// $send=mail('umairkhan123king@gmail.com',$name_contacter,$email_contacter,$subject_contacter,$messege_contacter);

						// if (mysql_query($send)) {
							echo "<script>alert('Messege Send successfully***')</script>";
						// }					
						
					}
					else{
						echo "<script>alert('Messege Send Failed!!! try again')</script>";
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
