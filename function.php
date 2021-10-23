<?php
	function perkenalan ($nama) {
		return "Welcome, $nama !!!";
	}
?>

<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
	<title>Latihan php</title>

</head>
<body>
	<h1><?= perkenalan("Sistem Informasi"); ?></h1>

</body>
</html>