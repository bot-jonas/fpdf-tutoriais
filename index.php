<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index</title>
	<style type="text/css">
		body { font-family: system-ui; }
	</style>
</head>
<body>
<h2>Tutoriais do <a href="http://www.fpdf.org/">FPDF</a>:</h2>
<ul>
<?php
	for($i=1; $i<=6; $i++) {
		echo "<li><a href='tutoriais/$i.php' target='_blank'>Tutorial $i</a></li>";
	}
?>
</ul>
</body>
</html>