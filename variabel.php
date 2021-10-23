<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<form method="GET">
	<h1><input type="text" name="person">
	<button>SUBMIT</button></h1>	
</form>

<h1><?php
	$nama = $_GET['person'];
	echo $nama." more than world !!!"
?></h1>
</body>
</html>