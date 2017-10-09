<?php
	require("functions.php");
	//kui pole sisse logitud, liigume login lehele
	if(!isset($_SESSION("userid"])){
		header(""
		
		//väljalogimine
		if(isset($_GET["logout"])){
			session_destroy (); //lõpetab sessiooni
			header("location: login.php");
	$picsDir = "../../pics/";
	$picFiles = [];
	$picFileTypes = ["jpg", "jpeg", "png", "gif"];
	
	$allFiles = array_slice(scandir($picsDir), 2);
	
	foreach ($allFiles as $file) {
		$fileType = pathinfo($file, PATHINFO_EXTENSION);
		if (in_array($fileType, $picFileTypes) == true){
			array_push($picFiles, $file);
		}
	}
	//var_dump($allFiles);
	$fileCount = count($picFiles);
	$picNumber = mt_rand(0, ($fileCount -1));
	$picFile = $picFiles[$picNumber];
?>



<!DOCTYPE html>


<html>
<head>

	<meta charset="utf-8">
	<title>
       programmeerimise asjad
	</title>
</head>
<body>
	<h1>
	
	Sten </h1>
	<p>See veebileht on loodud õppetöö raames ning ei sisalda tõsiseltvõetavat sisu.</p>
	<p><a href="?logout=1">Logi välja</a></p>
	
	<h2>Pilte ülikoolist<h2>
	<img src="<?php echo $picsDir .$picFile; ?>" alt="Tallinna Ülikool">
	
</body>
</html>