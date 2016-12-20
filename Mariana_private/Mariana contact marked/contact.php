<!DOCTYPE html>
<html>

<head>
	<title>Mariana Rezende's Page</title>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="About me, Mariana Rezende. See my work and keep in touch.">
	<meta name="keywords" content="Mariana Rezende, About me, Portfolio, Work">
	<meta name="author" content="Mariana Rezende">
	
	<link rel="stylesheet" type="text/css" href="css/default.css">
</head>

<body>

<!-- Start navigation bar -->
<nav>
	<a href="index.html"><img alt="Photo of Mariana Rezende" class="top_image" src="images/photo.png"></a>
	<h1>mariana rezende</h1>
	<ul>
		<li><p><a href="https://marirezendes.wordpress.com/" target="_blank"><img alt="" src="images/balloon.png"/></a></p>
		<span class="tooltiptext">Thinking of...</span></li>	<!-- class 'selected' makes the selected item in menu to go blue -->
		<li><p><a href="https://marirezendes.wordpress.com/trabalhos/" target="_blank"><img alt="" src="images/folder.png"/></a></p>
		<span class="tooltiptext">Portfolio</span></li>	
		<li><p><a href=""><img alt=""  src="images/hands.png"/></a></p>
		<span class="tooltiptext">Meet me</span></li>	
	</ul>
</nav>	
<!-- End navigation bar -->

	

	<div class="main_content">
		<h2>Contact me</h2>
		 
        <p>I'll be very happy to hear from you!</p>
        <p>Feel free to contact me with questions, comments, suggestions, ideas, etc.</p>
        <p>I'll be replying to you in no more than 48 hours.</p>
        <p style="font-size:10px">* Required fields</p>
        <hr>
            
        
        <?php  
   		//Retrieve name from query string and store to a local variable  
   		
   		if (isset($_POST['firstname'])) {
  			$firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $message = $_POST['message'];
   			echo 
                "<div id='form_response'><h3> Hello $firstname $lastname!</h3>
                <p>We received your information and will contact you soon at <b>$phone</b> or <b>$email</b>.</p><br>
                <p><b>Your message:</b><br>$message</p>  
                </div>
            ";
   		}
		 
    ?>
             
        
        <form method="POST" autocomplete="on">
            
                    
          First name:*<br>
          <input type="text" name="firstname"  placeholder="E.g. Maria" autofocus required>
                    
          <br><br>
          Last name:*<br>
          <input type="text" name="lastname"  placeholder="E.g. Smith" required>
            <br><br>
          Phone number:*<br>
          <input type="text" name="phone"  placeholder="E.g. +12223333333" required>
            <br><br>
          E-mail:*<br>
          <input type="email" name="email"  placeholder="E.g. maria.smith@domain.com" required>
            <br><br>
          Password (max. 8 charachteres):*<br>
          <input type="password" name="password" maxlength="8" autocomplete="off" required>
            <br><br>
          Message:<br>
           <textarea name="message" rows="10" cols="50"></textarea>
            
          <hr>
          <input type="submit" name="submit" value="Send"> <input type="reset" name="reset" value="Reset">
           
        </form> 
        
   
        
	</div>

	<div class="right_nav">
		<h2>Greet</h2>
		<p>Come to greet me in Social Media too!</p>
        <p>Follow me in LinkedIn and Instagram and get updated about my work.</p>

		<div class="instagram_icon">
			<p><a href="https://www.instagram.com/mari_remo/" target="_blank"><img alt="Instagram profile" src="images/instagram.png"/></a></p>
		</div>
		
		<div class="linkedin_icon">
			<p><a href="https://ca.linkedin.com/in/marianarezende" target="_blank"><img alt="Linkedin profile" src="images/linkedin.png"/></a></p>
		</div>
	</div>
</body>
</html>