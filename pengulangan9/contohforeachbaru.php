<!DOCTYPE html>
<html>
<head>
    <title>Penggunaan Foreach</title>
</head>
<body>
Menggunakan Foreach
<br>
    <?php
    $warna = array("merah", "biru", "hijau","kuning");
    foreach ($warna as $nilai){
        echo "Warna $nilai<br>";
    }
?>
</body>
</html>