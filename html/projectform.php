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
			
		<div id="main">
			<div id="cwrapper">

				<div>

					<h3>Voeg project toe aan database</h3>

					<p>Hier kun je een project toevoegen aan de database. Het is de bedoeling dat je alle velden invult en de een zip bestand upload. Het plaatje kan .jpg en .png worden geupload.<br><br></p>
				
				</div>
				
				<form method="GET">

					<label for="pnaam">Project naam</label>
					<input type="text" id="pnaam" name="projectnaam" placeholder="Project Naam">
					
					<label for="type">Type</label>
					<select id="type" name="type">
						<option value="website">Website</option>
						<option value="telefoon_app">Telefoon App</option>
						<option value="java_app">Java App</option>
					</select>

					<br>
					
					<label for="subject">Project Omschrijving</label><br>
					<textarea id="pomschrijving" name="projectomschrijving" placeholder="Beschrijf hier je project" style="height:200px; width:400px;"></textarea><br>	
					
					<label for="pthumb">Voeg hier een thumbnail toe.</label>
					<input type="text" id="pthumb" name="projectthumbnail" placeholder="Thumbnail"><button>Voeg toe</button><br>
					
					<label for="pzip">Voeg hier je project toe</label>
					<input type="text" id="pzip" name="projectzip" placeholder="Project"><button>Voeg toe</button><br>

					<input type="submit" value="Submit" name="submitproject">
					
				</form>
					
				</div>
				
					<?php formInput();?>
		</div>


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