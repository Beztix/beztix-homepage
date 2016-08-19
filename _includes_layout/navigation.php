<?php

//======================================================================
// Diese PHP-Datei enthält das Navigationsmenü der Webseite, das auf jeder Seite der Homepage enthalten ist.
// Sie wird von der jeweiligen index.php eingebunden. 
// Über die in der index.php belegten PHP-Variable thisPage wird die aktuelle Seite identifiziert, ihr wird eine 
// entsprechende CSS-Klasse zugewiesen um sie mittels CSS hervorheben zu können.
// Bei Bedarf werden entsprechende Submenüs eingebunden.
//======================================================================

//Abfrage der in den index.php definierten Konstante, um direkten Zugriff auf diese PHP-Datei zu verhindern
if(!defined('AccessConstant')) {die('Direct access not permitted');}



?>		




		<nav id="navigation">
			<ul>
				<li>
					<a <?php if ($thisPage=="startseite") {echo " class=\"currentpage\"";} ?>  href="../startseite/index.php">STARTSEITE</a>
				</li>
				
				<li>
					<a <?php if ($thisPage=="ueber_mich") {echo " class=\"currentpage\"";} ?>  href="../ueber_mich/index.php">ÜBER MICH</a>
				</li>
				
				<li>
					<a <?php if ($thisPage=="webdesign") {echo " class=\"currentpage\"";} ?> href="../webdesign/index.php">WEBDESIGN</a>
				</li>
				
				<li>
					<a <?php if ($thisPage=="grafikdesign") {echo " class=\"currentpage\"";} ?> href="../grafikdesign/index.php">GRAFIKDESIGN</a>
				</li>
				
				<li>
					<a <?php if ($thisPage=="projekte") {echo " class=\"currentpage\"";} ?> href="../projekte/index.php">PROJEKTE</a>
				</li>
				
				<li>
					<a <?php if ($thisPage=="informatik") {echo " class=\"currentpage\"";} ?> href="../informatik/index.php">INFORMATIK</a>
				</li>
			</ul>
		</nav>
		