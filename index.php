<!DOCTYPE html>
<html>

<head>
<title>Password Generator</title>
<link rel='stylesheet' type='text/css' href='style.php' />
</head>

<body>
<div id="container">
<h1>Password Generator</h1>

<p>With so many online accounts that require passwords, we create either simple and easy to break passwords or complicated and difficult to remember passwords. Password generator is here to help you create a complex, yet easy to remember password of randomly generated common words.<br>
<br>
To create a secure password, below you can select the number of words in your password, whether to includes symbols, and include images to help you recall your password.<br>
<br>

<form method='POST' action='display.php'>

Select the number of items (words, numbers, and symbols) for your password: 
<select name="totalItems" >
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
</select>
<br>
<br>
Select the number of numbers in your password: 
<select name="nums" >
  <option value="0" selected="selected">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</select>
<br>
<br>
Select the number of symbols (&#33;, &#34;, &#35;, &#36;, &#37;, &#38;, &#40;, &#41;, &#42;, &#43;) in your password:
<select name="syms" >
  <option value="0" selected="selected">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</select>
<br>
<br>
If you are visually-oriented and prefer to see your password with words and images, click here:
<input type="checkbox" name="images" value="Yes" />  YES
<br>
<br>
<input type="submit" value="SUBMIT" >
</form>

</div>
</body>
</html>
