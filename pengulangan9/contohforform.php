<html>
<head>
	<title>Perulangan FOR</title>
</head>
<body>
	Penggunaan pada form :
	<br>
	<?php
	echo"<form name = form1 method=post>";
	echo"tanggal";
	echo"<select name = tanggal>";
	for ($tanggal = 1 ;$tanggal<=31;$tanggal++)
	{
		echo"<option value=".$tanggal.">".$tanggal."</optoin>"
	}
	echo"</select>";
	echo"</form>";
?>
</body>
</html>