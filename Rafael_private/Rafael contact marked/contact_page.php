<!DOCTYPE html>
<html lang="en"> <!-- Rafael Pacheco - Assignment 01 - About me page -->
<head>
	<meta charset="utf-8">
	<title>Contact Rafael</title>
	<link rel="stylesheet" href="css_contact_page.css">
</head>
<!--great work, probably submit profile is not the best label for the submit button, the user is not signing
	up for something. you lost a few marks becuase you didn;t use phone number and/or email in the 
response message-->
<body>
<header>
	<nav>
		<ul class="header">
			<li class="header">About me</li>
			<li class="header"> My work </li>
			<li class="header"> Contact </li>
		</ul>
		</nav>
</header>
	<div class="div-uno">

		<img class="me" src="About_me_rafael_pacheco.jpg" width="150" alt="Rafael Pacheco">

		<h1> Rafael Pacheco</h1>
		
		<p>At your service!</p>
		
	</div>
	<hr>
	<div class="form">
		<form method='POST'>  
			<h2>Join my contact list</h2>  
			<label>Name</label><br><input type="text" name="name"> <br> 
			<label>Last name</label><br><input type="text" name="last_name"> <br>
			<label>Profession</label><br><input type="text" name="profession"><br>
			<label>Service required</label><br><input type="text" name="service"><br>
			<label>Phone number</label><br><input type="text" name="phone_number"><br>
			<label>E-mail</label><br><input type="text" name="E-mail"> <br> 
			<label>Password</label><br><input type="Password" name="password"><br>
			<input class="submit" type="submit" value="Submit Profile"><br> 
		</form> 

		<?php   

			if (isset($_POST['name'])) {
			
				$vara = $_POST['name'];
				$varb = $_POST['last_name'];
				$varc = $_POST['service'];

			echo "<h3> Thanks <span>$vara $varb</span><br>I'll contact you sooner than later to have a chat about<br>$varc<br> ...I promise<br>...Trust me</h3>";
		}
		?> 
	</div>
	<div class="div-dos">
		<h2>Follow Me on Social Media</h2>
		<ul class="social"> 
			<li class="social"><a class="social" href="https://twitter.com/RandomRafa" target="_blank"><img src="twitter.png" width="40" alt="Twitter"></a></li>
			<li class="social"><a class="social" href="http://randomrafa.tumblr.com/" target="_blank"><img src="tumblr.png" width="35" alt="Tumblr"></a></li>
			<li class="social"><a class="social" href="https://ca.linkedin.com/in/rafaelpacheco17" target="_blank"><img src="linkedin.png" width="35" alt="LinkedIN"></a></li>
		</ul>
	</div>
</body>
</html>