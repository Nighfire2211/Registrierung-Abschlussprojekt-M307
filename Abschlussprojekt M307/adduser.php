<!DOCTYPE html>
<html>

	<style type="text/css">
	body{
	background-color: #ffffe6;
	}
	p {
		float-left 

	}
	div {
		margin-bottom: 120px;
		margin-top: -200px;
		margin-left: 160px;
		color: black;
	}
	h2 {
		margin-top: 20px;
		margin-left: 150px;

	}
		img{
			float-left;
		}
		h4 {
			margin-bottom: 10px;
		}
		footer
		{
			border: 2px, 40px,2px,40px;
			border-color: black;
			border-style: solid;
		}
	</style>

<head>
	<h3>	<p> <img src="banner.gif"> </p>
	<p> <img src="tomcat.gif"> </p>
	<a href="index.html"><img src="home.gif"> <br> </a>
	<a href="guestbook.php"><img src="guestbook.gif"> <br> </a>
	<a href="registr.php"><img src="witze.gif"> <br> </h3> </a>
	<title>G&auml;stebuch</title>
</head>
<body>

<h1> Auswertung des Formulars </h1>
<!--          Dies gibt die eingegebenen im registr.php daten in adusser aus              -->
<?php
echo "<p>anrede:  " .$_GET["Anrede"]. "<br>" ;
echo "<p>Vorname:  " .$_GET["Vorname"]. "<br>" ;
echo "<p>Nachname:  " .$_GET["Nachname"]. "<br>" ;
echo "<p>Telefon:  " .$_GET["Telefon"]. "<br>" ;
   
#das tragt im user.txt datei die daten ein
$handle = fopen("user.txt", "w");
	fwrite($handle, $_GET["Anrede"] . " " . $_GET["Vorname"] . " " . $_GET["Nachname"] . " " . $_GET["Telefon"]);
	fclose($handle);
			?>


</body>
</html> 