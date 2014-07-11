<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PORTFOLIO</title>
	<link href='http://fonts.googleapis.com/css?family=Pompiere|Wire+One|Alegreya+Sans:100' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="grid.css">
	<link rel="stylesheet" href="main.css">
	<title>Contact Success</title>
</head>
<body>
	<div class="container">

		<div class="one">
			<div class="col-1-6">
				<div class="presence">
					<div class="p_logo"><a href="index.html"><img src="addition/LOGO.jpg"></a></div>
					<div class="p_about"><a href="about.html">ABOUT</a></div>
					<div class="p_project"><a href="projects.html">PROJECTS</a></div>
					<div class="p_paper"><a href="paper.html">PAPER</a></div>
					<div class="p_images"><a href="images.html">IMAGES</a></div>
					<div class="p_contact"><a href="contact.php">CONTACT</a></div>
				</div>
			</div>
			<div class="col-5-6">
				<div class="thanks">
					<?php
						echo "<h1>Thank you, ".$_POST['your_name']." for leaving me a message!</h1>";
					?>
			</div>
		</div>

		<div class="four">
			<div class="col-1-6"></div>
			<div class="footer">
				<div class="copyright"> </div>
				 		<a class="fb" href="https://www.facebook.com/">FACEBOOK</a>
						<a class="mail" href="mailto:clalia.rezzola@hotmail.com">E-MAIL</a>
				</div>
			</div>
		</div>

	</div>	
</body>

</body>
</html>