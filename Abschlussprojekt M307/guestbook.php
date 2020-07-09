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
</head> <!--Ganzer head ist das Menü mit Titel-->
<body>
	<form action="addentry.php" method = "POST">
		<p>Name*: <input type="text" name="Name" size="20"></p>
		<p>Vorname*: <input type="text" name="Vorname" size="20"></p>
		<p> E-Mail: <input type="text" name="Mailadresse" size="20" required
			<?php 
			$string = $_POST["Mailadresse"];
		$okay = 1;
		if(substr_count($string, "@") == 0)
		{
			echo "<p>Zeichen <strong>@</strong> konnte nicht gefunden werden!</p>";
			$okay = 0;
		}
		elseif(substr_count($string, ".") == 0)
		{
			echo "<p>Zeichen <strong>.</strong> konnte nicht gefunden werden!</p>";
			$okay = 0;
		}
		if($okay == 1)
		{
			echo "<p>Die Adresse scheint gültig zu sein</p>";
			
		}
		?>
	</p>
	<p>Message: <textarea name="Kommentarfeld" size="200" cols="300" rows="4"></textarea></p>
	<p> <input type="submit" name="Eintragen"></a></p>
	<p> <input type="reset" name="Loeschen"> </p>
</form>
	<p><a href="guestbook_read.php">[G&auml;stebuch lesen]</p></a>
	<!--Seite Verlinken -->



