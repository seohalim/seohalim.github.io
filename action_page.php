<html>
	<head>
		<meta charset="utf-8" />
		<title>Seoha's World - Contact Ha</title>
		<link href="footer.css" rel="stylesheet" media="all">
		<link href="header.css" rel="stylesheet" media="all">
		<link href="contactform.css" rel="stylesheet" media="all">
		<?php
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			$from = 'From: SeohaWorld'; 
			$to = 'commeha@gmail.com'; 
			$subject = $_POST['subject'];
			$human = $_POST['human'];
					
			$body = "From: $name\n E-Mail: $email\n Message:\n $message";
						
			if ($_POST['submit'] && $human == '6') {				 
				if (mail ($to, $subject, $body, $from)) { 
				echo '<p>Your message has been sent!</p>';
			} else { 
				echo '<p>Something went wrong, go back and try again!</p>'; 
			} 
			} else if ($_POST['submit'] && $human != '6') {
			echo '<p>You answered the anti-spam question incorrectly!</p>';
			}
		?>
	</head>
	<body>
		<header>
			<h1><a href="main.html"><img src="logo.jpg" alt="IllustratorHa" style="width:10%" id="logo"></img></a></h1>
			<nav>
				<ul>
					<li><a href="main.html">Main</a></li>
					<li><a href="picturebooks.html">Picture Books</a></li>
					<li><a href="singleproject.html">Single Projects</a></li>
					<li><a href="aboutha.html">About Ha</a></li>
					<li><a href="contactha.html">Contact Ha</a></li>
				</ul>
			</nav>
		</header>
		<article>
			<h2>Contact Ha</h2>
			<div class="container">
				<form method="post" action="action_page.php">
					<label for="fname">First Name</label>
					<input type="text" id="fname" name="firstname" placeholder="Your name..">
					<label for="lname">Last Name</label>
					<input type="text" id="lname" name="lastname" placeholder="Your last name..">
					<label for="email">E-mail</label>
					<input type="text" id="email" name="email" placeholder="Your e-mail address..">
					<label for="subject">Subject</label>
					<input type="text" id="subject" name="subject" placeholder="Subject of e-mail..">
					<label for="contents">Contents</label>
					<textarea id="contents" name="contents" placeholder="Write something.." style="height:200px"></textarea>
					<label for="human">*What is 3+3? (Anti-spam)</label>
					<input id="human" name="human" placeholder="Your answer..">
					<input type="submit" value="Submit">
				</form>
			</div> 
		</article>
		<footer>
			<a href="mailto:commeha@gmail.com"><img src="email.png" alt="email" id="email"></img></a>
			<a href="http://www.behance.net/SEO-HA"><img src="behance.png" alt="behance" id="behance"></img></a>
			<a href="http://www.instagram.com/illustratorha"><img src="instagram.jpg" alt="instagram" id="instagram"></img></a>
			<a href="http://www.facebook.com/Illustratorha"><img src="facebook.png" alt="facebook" id="facebook"></img></a>
		</footer>
		
	</body>
</html>