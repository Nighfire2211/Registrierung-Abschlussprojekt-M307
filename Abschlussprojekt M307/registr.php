 <!DOCTYPE html>
<html>
<!-- sidharth jaiswal / Ksenija lazic  -->
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
    #form1
    {}
  </style>
<!--Style für das Menü definieren-->
<head>
  <h3>  <p> <img src="banner.gif"> </p>
  <p> <img src="tomcat.gif"> </p>
  <a href="index.html"><img src="home.gif"> <br> </a>
  <a href="guestbook.php"><img src="guestbook.gif"> <br> </a>
  <a href="registr.php"><img src="witze.gif"> <br> </h3> </a>
  <title>G&auml;stebuch</title>
	<title>Registrierung</title>
</head><!--Ganzer head ist das Menü mit Titel-->
<body>
  <!--  eine anrede fuer herr oder frau -->
<form id ="form1" action="registr.php"method="POST">
<p><input type="radio"  name="Anrede" value="Herr" required="required" > Herr
	<input type="radio" name="Anrede" value="Frau" required=" required" checked> Frau 
			</p>
  		<!-- eingabe felder fuer vorname, nachname und telefon-->
  		<p>Vorname : <input type="text" name="Vorname"></p>
  		<p>Nachname : <input type="text" name="Nachname"></p>
  		<p>Telefon : <input type="text" name="Telefon"></p>
<!--der knopf zum abschicken und weiterleiten -->
<p><input type="submit" name ="abschicken" value="abschicken" ></p>

  	</form>
<?php
#ein code falls mann kein Geschleacht angegeben hat
if (isset($_POST["abschicken"])) {
$okay = 1;
 $Anrede=$_POST["Anrede"];
 if (empty($_Anrede)) {
 	echo "<p>   </p";
 	$okay =0 ;
 }
}
#eine fehler meldung wen der vorname zu kurz ist
 if (isset($_POST["abschicken"])) {
        $okay = 1;	
  		$vorname= $_POST["Vorname"];

        if(strlen($vorname) < 2)
        {
            echo "<p> <strong>1</strong> buchstabe ist ein zukleiner vorname</p>";
            $okay = 0;
        }

    #eine fehler meldung wen der nachname zu kurz ist
  		$name= $_POST["Nachname"];
        if(strlen($name) < 2)
        {
            echo "<p><strong>1</strong> buchstabe ist ein zukleiner name</p>";
            $okay = 0;
        }
        
    
    #Fuer eine richtige telefon angabe
  		$Telefon= $_POST["Telefon"];

        if(substr_count($Telefon, " ") == 0)
        {
            echo "<p>das ist <strong></strong> keine richtige telefon nummer</p>";
            $okay = 0;
        }
#Fuer eine richtige telefon angabe
  		$Telefon= $_POST["Telefon"];

        if(substr_count($Telefon, "+" ) == 0)
        {
            echo "<p>das ist <strong></strong> keine richtige telefonnummer ohne + </p>";
            $okay = 0;
        }
        +
    #Fuer eine richtige telefon angabe
  		$Telefon= $_POST["Telefon"];
        if(substr_count($Telefon, "(" ) == 0)
        {
            echo "<p>das ist <strong></strong> kein richtige telefon nummer, sie müssen noch () schreiben </p>";
            $okay = 0;
        }
#Fuer eine richtige telefon angabe
        $Telefon= $_POST["Telefon"];
        
        if(substr_count($Telefon, ")" ) == 0)
        {
            echo "<p>das ist <strong></strong> kein richtige telefon nummer, sie müssen noch () schreiben </p>";
            $okay = 0;
        } 




    # falls $okay == 1 ist wird man auf der seite adduser weiter geleitet
    if ($okay == 1){
		header("Location: http://localhost/adduser.php?Anrede=$Anrede&Vorname=$vorname&Nachname=$name&Telefon=$Telefon");
	exit;
    }

   
}
        ?>
    
</body>
</html>