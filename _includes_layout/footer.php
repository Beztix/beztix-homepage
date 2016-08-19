<?php

//======================================================================
// Diese PHP-Datei enthält den Seitenfooter, der an jeder Seite der Homepage unten angefügt wird. 
// Sie wird von der jeweiligen index.php eingebunden.
//======================================================================

//Abfrage der in den index.php definierten Konstante, um direkten Zugriff auf diese PHP-Datei zu verhindern
if(!defined('AccessConstant')) {die('Direct access not permitted');}



?>

		<footer>
		
			<div id="footercontainer">
			
				<div id="footerleft">
					<span class="footertext<?php if ($thisPage=="startseite") {echo " currentpage";} ?>" ><a href="../startseite/index.php">STARTSEITE</a></span><br>
					<span class="footertext<?php if ($thisPage=="ueber_mich") {echo " currentpage";} ?>" ><a href="../ueber_mich/index.php">ÜBER MICH</a></span><br>
					<span class="footertext<?php if ($thisPage=="webdesign") {echo " currentpage";} ?>" ><a href="../webdesign/index.php">WEBDESIGN</a></span><br>
				</div>
				
				<div id="footermiddle">
					<span class="footertext<?php if ($thisPage=="grafikdesign") {echo " currentpage";} ?>" ><a href="../grafikdesign/index.php">GRAFIKDESIGN</a></span><br>
					<span class="footertext<?php if ($thisPage=="projekte") {echo " currentpage";} ?>" ><a href="../projekte/index.php">PROJEKTE</a></span><br>
					<span class="footertext<?php if ($thisPage=="informatik") {echo " currentpage";} ?>" ><a href="../informatik/index.php">INFORMATIK</a></span><br>
				</div>
				
				<div id="footerright">
					<span class="footertext">Copyright <a href="https://beztix.de">BEZTIX</a></span><br>
					<span class="footertext">Site by <a href="https://beztix.de">BEZTIX</a></span><br>
					<span class="footertext<?php if ($thisPage=="impressum") {echo " currentpage";} ?>" ><a href="../impressum/index.php">IMPRESSUM</a></span><br>
				</div>
				
			</div>
			
		</footer>


				