<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingkaran</title>
</head>
<a href="index.php">Home</a>
<body>
    <?php
    $jari = 7;
    $phi = 3.14;
    $luas = $phi * $jari * $jari;
    $keliling = 2 * $phi * $jari;
    ?>
    <h1>Lingkaran</h1>

    <h4>Luas = phi x jari² =  <?=$luas; ?></h4>
    <h4>Keliling = 2 x phi x jari = <?=$keliling; ?></h4>
    <img src="lingkaran.jpg" alt="">
</body>
</html>