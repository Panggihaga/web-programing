<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi</title>
</head>
<a href="index.php">Home</a>
<body>
    <?php
    $sisi=$_POST['sisi'];
    $luas=$sisi*$sisi;
    $keliling=4*$sisi;
    ?>
    <h1>Persegi</h1>
    <h2>Luas = sisi x sisi = <?php echo $luas;?></h2>
    <h3>Keliling = 4 x sisi = <?php echo $keliling;?></h3>
    
</body>
<img src="persegi.webp" widht="300" height="300"alt="">
</html>