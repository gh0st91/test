<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>untitled</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	$handle = fopen("counter.txt", "r"); 
	if(!$handle){
	echo "Could not open the file" ;
	}
	else {
	$counter = ( int ) fread ($handle,20) ;
	fclose ($handle) ;
	$counter++ ; 
	echo" <p> Visitor Count: ". $counter . " </p> " ; 
	$handle = fopen("counter.txt", "w" ) ; 
	fwrite($handle,$counter) ; 
	fclose ($handle) ;
	}
	?>
</body>
</html>