<!DOCTYPE html>
<html>

<head>

<link rel='stylesheet' type='text/css' href='style.php' />
<?php require 'words.php';
$password = array();
$word_number = $_POST["number"];
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

echo "<br><br><br><a href=\"/dwa15/passwd/index.php\" >Need to generate another password?</a>";
?>
</div>
</body>
</html>
