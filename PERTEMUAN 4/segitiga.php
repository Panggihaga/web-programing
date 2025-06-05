<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
</head>
<a href="index.php">Home</a>
<body>
<?php
    $alas=10;
    $tinggi=8;
    $sisi1=5;
    $sisi2=5;
    $sisi3=5;
    $luas = 0.5 * $alas * $tinggi;
    $keliling = $sisi1 + $sisi2 + $sisi3
    ?>
    <h1>Segitiga</h1>
    
    <h4>Luas = 1/2 x alas x tinggi =  <?=$luas; ?></h4>
    <h4>Keliling = sisi1 + sisi2 + sisi3 = <?=$keliling; ?></h4>
    <img src="segitiga.jpg" alt="">
</body>
</html>