<!DOCTYPE html>
<html>

<head>

<link rel='stylesheet' type='text/css' href='style.php' />
<?php require 'words2.php';
$password = array();
$word_number = $_POST["number"];
$image = $POST["images"];
$symbols = $POST["symbols"];

?>
<title>Password Generated</title>

</head>

<body>

<div id="content">

<?php

echo "<br><h2>Your Randomly-Generated Password Is:</h2><br>";
for ($i=0; $i < $word_number; $i++) 
	{
	$word_index = rand(0,count($word)-1);
	$password[$i]=$word[$word_index];
	if ($i < $word_number - 1){
		echo $password[$i].'-';
		}
	else {
		echo $password[$i];
	     }
	}	
if ($image == TRUE)
	 {
	   for ($i=0; $i < $word_number; $i++) {
	 	echo "<img src='" .$image[$i] . " ' alt=" .$password[$i] . ' image>   ';
	      }
	 }

echo "<br><br><br><a href=\"/p2/index.php\" >Need to generate another password?</a>";
?>
</div>
</body>
</html>
