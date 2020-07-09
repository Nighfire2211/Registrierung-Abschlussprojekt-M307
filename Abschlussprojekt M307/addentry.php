<!DOCTYPE html>
<html>
<!--Autoren: Sidharth Jaiswal, Ksenija Lazic It1c-->
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
<!--Style für das Menü definieren-->
<head>
  <h3>  <p> <img src="banner.gif"> </p>
  <p> <img src="tomcat.gif"> </p>
  <a href="index.html"><img src="home.gif"> <br> </a>
  <a href="guestbook.php"><img src="guestbook.gif"> <br> </a>
  <a href="registr.php"><img src="witze.gif"> <br> </h3> </a>
  <title>G&auml;stebuch</title>
</head><!--Ganzer head ist das Menü mit Titel-->
<body>
	<?php
	#Überprüfung ob die eingaben gefüllt sind
	if (empty($_POST["Name"]))
	{
		echo "Füllen Sie das Feld aus!"; 
		echo "<br>";
	}
	else
	{
		echo "<p>Nachname: " .$_POST["Name"];
		
	}
	if (empty($_POST["Vorname"])) {
		echo "Füllen Sie das Feld aus!"; 
		echo "<br>";
	}
	else {
		echo "<p>Vorname: " . $_POST["Vorname"];
		echo "<br>";
	}
if (empty($_POST["Mailadresse"])) {
		echo "Füllen Sie das Feld aus!"; 
		echo "<br>";
	}
	else {
		echo "E-Mail: " . $_POST["Mailadresse"];
		echo "<br>";
	}
if (empty($_POST["Kommentarfeld"])) {
		echo "Kein Kommentar"; 
		echo "<br>";
	}
	else {
		echo "Nachricht: " . $_POST["Kommentarfeld"];
		echo "<br>";
	}
	#php daten in einer txt datei implementieren
	$handle = fopen("guestbook.txt", "w");
	$inhalt = $_POST["Vorname"] . " " . $_POST["Name"] . " " . $_POST["Mailadresse"];
	fwrite($handle, $inhalt);
	fclose($handle);
	?>
	</body>
	</html>