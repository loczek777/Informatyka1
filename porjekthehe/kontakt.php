<?php 

if(isset($_GET["page"]))
	$strona = $_GET["page"];
else
	$strona = null;

echo "strona: ".$strona."<br>";

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Kontakt </title>
<meta charset="utf-8">
<link rel="stylesheet" href="css.css">
</head>
<body>
<a href="kontakt.php?page=kontakt"> Informacje kontaktowe </a> <br>


	<section id="Baner">
	
	</section>
	<section id="header">
	<ul>
		<li class="p1" style="float:right"><a href="index.php">Wroc na strone glowna</a></li>
	</ul>
	</section>
	<section id="body">
	
	<div id="tekst">
<p>Kontakt z nami dostepny jest przez facebooka,instagrama, email i telefon komórkowy.</p>
<p>Facebook - GadgetsZS</p>
<p>Instagram - GadgetsZS </p>
<p> Telefon - 696 969 696 </p>
<p> Email - GadgetsZS@gmail.com </p>
<p> W przyszlosci planujemy dodanie wielu innych mozliwosci kontaktowych </p>
</div>

	
	</section>
	<section>
	
	<?php if(($strona)!=null) include($strona.".php"); ?>
	
	</section>
</body>
<footer>
	<section id="footer">
	<ul>
		
	</ul>
	</section>
</footer>
</html>