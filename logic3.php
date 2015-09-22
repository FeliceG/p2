<?php require 'words2.php';
$password = array();
$include_image = $_POST["images"];
$numbers = $_POST["nums"];
$symbols = $_POST["syms"];
$totalNumsSyms = $numbers + $symbols;
$word_number = $_POST["totalItems"];


if ($word_number <= $totalNumsSyms)
{
$status = FALSE;
$error = 'Please select a larger number of items or fewer symbols and numbers for your password. Try again';
}
else
{
$status = TRUE;
if ($numbers > 0) 
{
     for ($i=0; $i < $numbers; $i++) {	
	$rand_number = rand(0,count($numbers_array)-1);
	$password[$i][0] = $numbers_array[$rand_number][0];
	$password[$i][1] = $numbers_array[$rand_number][1];
     }
}

if ($symbols > 0) 
{
     for ($i=$numbers; $i < $totalNumsSyms; $i++) {	
	$rand_number = rand(0,count($symbols_array)-1);
	$password[$i][0] = $symbols_array[$rand_number][0];
	$password[$i][1] = $symbols_array[$rand_number][1];
     }
}


for ($i=$totalNumsSyms; $i < $word_number; $i++) {	
	$rand_number = rand(0,count($words_array)-1);
	$password[$i][0] = $words_array[$rand_number][0];
	$password[$i][1] = $words_array[$rand_number][1];
}


shuffle($password);
}

?>

