<?php

//======================================================================
// Diese PHP-Datei enthält den HTML-Header der Webseite, der sich auf jeder Seite der Homepage befindet und die 
// Meta-Informationen zur Webseite enthält. 
// Sie wird von der jeweiligen index.php eingebunden. Die Seitenspezifischen Meta-Informationen (Title, Keywords etc.) 
// müssen hierbei in der index.php als PHP-Variable deklariert werden, andernfalls werden Default-Werde verwendet.
//======================================================================

//Abfrage der in den index.php definierten Konstante, um direkten Zugriff auf diese PHP-Datei zu verhindern
if(!defined('AccessConstant')) {die('Direct access not permitted');}



?>		


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="shortcut icon" href="../_images_layout/favicon.ico">
	
	<link href="../_css/main.css" rel="stylesheet" type="text/css" charset="utf-8" />
	<link href="../_css/lightbox.css" rel="stylesheet" type="text/css" charset="utf-8" />
	
	<link href="../_css/squarish_sans.css" rel="stylesheet" type="text/css" charset="utf-8" />
	<link href="https://fonts.googleapis.com/css?family=Syncopate:400,700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet"> 
	
	
<?php 
// Einfügen der in der index.php definierten Variablen, ansonsten Standard-Titel, Keywords und Description

if(!isset($title)) { 
	$title = "Beztix";
}
echo "\t<title>" . $title . "</title>\n";



$standardKeywords = "Beztix, Sebastian, Lützow, Informatik, Grafik, Gaming, Basti, Fachschaft, Bayreuth, Universität, Computer, Science" ;
$keywords = $standardKeywords . ", " . $keywords;

echo "\t<meta name=\"keywords\" content=\"" . $keywords . "\" />\n";


if(!isset($description)) { 
	$description = "Die private Homepage von Beztix aka Sebastian Lützow";
}
echo "\t<meta name=\"description\" content=\"" . $description . "\" />\n";


//optionales Einbinden von zusätzlichem (seitenspezifischem) header-code	
if(file_exists('headers.php')) { 
	echo "\t"; 
	include 'headers.php'; 
	echo "\n"; 
}; 


//optionales Einbinden von zusätzlichen (seitenspezifischen) scripts 
if(file_exists('scripts.php')) {
    echo "\t";
    include 'scripts.php';
    echo "\n"; 
};
?>
</head>


