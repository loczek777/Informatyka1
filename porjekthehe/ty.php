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
<title> Twoje konto </title>
<meta charset="utf-8">
<link rel="stylesheet" href="css.css">
</head>
<body>
<a href="ty.php?page=ty"> Moje konto </a> <br>


	<section id="Baner">
	
	</section>
	<section id="header">
	<ul>
		<li class="p1" style="float:right"><a href="index.php">Wroc na strone glowna</a></li>
	</ul>
	</section>
	<section id="body">
	
	
	
	</section>
	<section>
	
	<?php if(($strona)!=null) include($strona.".php"); ?>
	
	</section>
</body>
<footer>
	<section id="footer">
	<ul>
		<li class="p1"><a href="promo">Promocje !</a> </li>
		<li class="p1"><a href="kontakt">Informacje kontaktowe</a></li>
		<li class="p1"><a href="inne">Inne gadgety</a></li>
	</ul>
	</section>
</footer>
</html>