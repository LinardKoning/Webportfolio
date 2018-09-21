<!DOCTYPE html>
<?php include '../php/functions.php'; ?>
<html lang="nl">
	<head>
	
		<meta charset="UTF-8">
		<meta name="robots" content="all">
		<meta name="language" content="Dutch">
		<meta name="author" content="Linard Koning">
		<meta name="disription" content="WebPortofolio van Linard Koning">
		<meta name="keywords" content="Linard Koning, Portofolio">
		<meta name="copyright" content="copyright">

		
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
		
		<script src="../js/jquery-3.3.1.min.js"></script>
		<script src="../js/header.js"></script>
		
	</head>

	<body>
		<div id="header">
			<h1>Webportfolio</h1>
		</div>
	
		<div id="navbar">
		  <a href="../index.html">Home</a>
		  <a href="aboutme.html">About me</a>
		  <a href="projecten.php">Projecten</a>
		  <a href="contact.html">Contact</a>
		  
		</div>
			
		<!--<div id="main">-->
			<div id="cwrapper">
				<div id="prlist">
					<div id="prtext">

						<h3>Voeg project toe aan database</h3>

						<p>Hier kun je een project toevoegen aan de database. Het is de bedoeling dat je alle velden invult en de een zip bestand upload. Het plaatje kan .jpg en .png worden geupload.<br><br></p>
					
					</div>
				
					<?php printTable();?>

				</div>
				
				<div id="prnav">
					<p>hoi</p>
				</div>
				
			</div>
			
		<!--</div>-->


		<div id="footerbar">
			<p>Online WebPortofolio gemaakt door Linard Koning 	&#9400;2018</p>
		</div>

		<div id="footerend">
			<p>inhoud</p>
			<p>inhoud</p>
			<p>inhoud</p>
			<a href="projectform.php">Voeg project toe</a>
		</div>	
	</body>
	
</html>