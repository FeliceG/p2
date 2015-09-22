<!DOCTYPE html>
<html>

<head>

<link rel='stylesheet' type='text/css' href='style.php' />
<title>Password Generator</title>

</head>

<body>
<div id="content">
<h1>Password Generator</h1>

<p>To help secure your password-protected online accounts, create a randomly generated password.<p>

<form method='POST' action='logic2.php'>

<p>Select the number of words for your password and "SUBMIT": <p>
<select name="number">
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
</select>

<input type="submit" value="SUBMIT" >
</form>

</div>
</body>
</html>