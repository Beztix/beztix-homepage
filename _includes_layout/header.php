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
			<img src="../_images_layout/beztixbanner.png" alt="Beztix logo">
		</a>
		
		<div id="word-cloud">
			<span class="word-1">GRAFIKDESIGN</span>
			<span class="word-2">INFORMATIK</span>
			<span class="word-3">HEIMWERKEN</span>
			<span class="word-4">WEBDESIGN</span>
			<span class="word-5">GAMING</span>
			<span class="word-6">GEOMETRIE</span>
			<span class="word-7">PERSÖNLICHES</span>
		</div>
	
	</header>
