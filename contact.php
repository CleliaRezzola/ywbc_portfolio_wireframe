<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PORTFOLIO</title>
	<link href='http://fonts.googleapis.com/css?family=Pompiere|Wire+One|Alegreya+Sans:100' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="grid.css">
	<link rel="stylesheet" href="main.css">
<!-- <link rel="stylesheet" href="http://basehold.it/24"> -->
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
				<div class="contact_input">
					<h2>CONTACT ME</h2>
					<form method="post" action="contact_success.php">
						<p class="requests">PLEASE FEEL FREE TO CONTACT ME IF YOU HAVE ANY REQUESTS.</p>
						YOUR NAME:<input type="text" class="your_name" name="your_name"><br>
						YOUR EMAIL:<input type="text" class="your_email" name="your_email"><br>
						<input type="radio" name="sex" value="male">Male
						<input type="radio" name="sex" value="female">Female<br>						
						YOUR COUNTRY:<select>
							<optiongroup label="Countries">
								<option >-select a country-</option>
								<option value="Argentina">Argentina</option>
								<option value="Brazil">Brazil</option>
								<option value="Croatia">Croatia</option>
								<option value="Denmark">Denmark</option>
								<option value="Estonia">Estonia</option>
								<option value="France">France</option>
								<option value="Greece">Greece</option>
								<option value="Italy">Italy</option>
								<option value="Latvia">Latvia</option>
								<option value="Marocco">Marocco</option>
								<option value="NewZealand">New Zealand</option>
								<option value="Portugal">Portugal</option>
								<option value="Russia">Russia</option>
								<option value="Spain">Spain</option>
								<option value="Thailand">Thainland</option>
								<option value="UK">UK</option>
								<option value="USA">USA</option>
								<option value="Venezuela">Venezuela</option>
								<option value="Zambia">Zambia</option>
							</optiongroup>
						</select><br>
						<textarea name="message" rows="20" cols="50">--leave a message here--
						</textarea><br>
						<input type="submit" value="Send">
					</form>
				</div> 
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

</html>