<!DOCTYPE html>
<html>

<head>
<meta charset="UTF=8">
<link rel='stylesheet' type='text/css' href='style.php' />

<?php require 'logic3.php'; ?>

<title>Password Generated</title>
</head>

<body>

<div id="content">

<?php
    if ($status == FALSE)
	{
	echo $error;
	}
    else
	{
	echo "<br><h2>Your Randomly-Generated Password Is:</h2><br>";

	for ($i=0; $i < $word_number; $i++) {
          if ($i < $word_number -1 )
	     {
		 echo "<em>" .$password[$i][0] ." - </em>";
		}
	  else  {
		 echo "<em>" .$password[$i][0] ."</em>";
                }
	}

        echo '<br><br>';

       if ($include_image == TRUE)
	    {
		for ($i=0; $i < $word_number; $i++) {
			echo "<img src='" .$password[$i][1] . " ' alt=" .$password[$i][1] . ' image>   ';
		}
	    }

      echo "<br><br><br><a href=\"/p2/index.php\" >Need to generate another password?</a>";
        }
?>

</div>
</body>
</html>
