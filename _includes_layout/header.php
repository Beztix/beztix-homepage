<?php

//======================================================================
// Diese PHP-Datei enthält den Seitenheader, der sich auf jeder Seite der Homepage oben befindet. 
// Sie wird von der jeweiligen index.php eingebunden.
//======================================================================

//Abfrage der in den index.php definierten Konstante, um direkten Zugriff auf diese PHP-Datei zu verhindern
if(!defined('AccessConstant')) {die('Direct access not permitted');}


?>		


	<header>	
	
		<a href="http://www.beztix.de" id="logo_left" title="Beztix main page">
			<img src="../_images_layout/logo_mittel.png" alt="Beztix logo">
		</a>
		
		<div id="word-cloud">
			<span class="word-1"><a href="../grafikdesign/index.php">GRAFIKDESIGN</a></span>
			<span class="word-2"><a href="../informatik/index.php">INFORMATIK</a></span>
			<span class="word-3"><a href="../projekte/index.php">HEIMWERKEN</a></span>
			<span class="word-4"><a href="../webdesign/index.php">WEBDESIGN</a></span>
			<span class="word-5"><a href="../ueber_mich/index.php">GAMING</a></span>
			<span class="word-6"><a href="../informatik/index.php">GEOMETRIE</a></span>
			<span class="word-7"><a href="../ueber_mich/index.php">PERSÖNLICHES</a></span>
		</div>
	
	</header>
