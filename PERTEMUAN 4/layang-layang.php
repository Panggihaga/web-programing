<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layang Layang</title>
</head>
<a href="index.php">Home</a>
<body>
    <?php
    
    $d1 = 12;
    $d2 = 8;
    $sisi1 = 7;
    $sisi2 = 9;
    $luas = 0.5 * $d1 * $d2;
    $keliling = 2* ($sisi1 + $sisi2);
    ?>
    <h1>Layang Layang</h1>

    <h4>Luas = 1/2 x d1 x d2 = <?php echo $luas;?></h4>
    <h4>Keliling 2 x (sisi1 + sisi2) = <?php echo $keliling;?></h4>
    <img src="layangan.jpg" alt="">
</body>
</html>