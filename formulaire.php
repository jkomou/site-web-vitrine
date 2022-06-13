<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="styleform.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
	<form class="container" method="POST" name="myemailform" action="formemail.php">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Contact Us</h2>
				<input type="text" class="field" placeholder="Nom" name="name">
				<input type="text" class="field" placeholder="Email" name="email">
				<input type="text" class="field" placeholder="Sujet" name="sujet">
				<textarea placeholder="Message" class="field" name="message"></textarea>
				<input type ="submit" class="btn"></button>
			</div>
		</div>
	<form>
</body>
</html>