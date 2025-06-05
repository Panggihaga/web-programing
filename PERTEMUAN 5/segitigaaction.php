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
    $alas=$_POST['alas'];
    $tinggi=$_POST['tinggi'];
    $sisi1=$_POST['sisi1'];
    $sisi2=$_POST['sisi2'];
    $sisi3=$_POST['sisi3'];
    $luas = 0.5 * $alas * $tinggi;
    $keliling = $sisi1 + $sisi2 + $sisi3
    ?>
    <h1>Segitiga</h1>
    
    <h4>Luas = 1/2 x alas x tinggi =  <?=$luas; ?></h4>
    <h4>Keliling = sisi1 + sisi2 + sisi3 = <?=$keliling; ?></h4>
    <img src="segitiga.jpg" alt="">
</body>
</html>