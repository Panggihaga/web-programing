<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belah Ketupat</title>
</head>
<a href="index.php">Home</a>
<body>
    <?php
    $diagonal1=$_POST['diagonal1'];
    $diagonal2=$_POST['diagonal2'];
    $sisi=$_POST['sisi'];
    $luas=1/2*$diagonal1*$diagonal2;
    $keliling=4*$sisi;
    ?>
    <h1>Belah Ketupat</h1>
    <h4>luas = 1/2 * diagonal1 * diagonal2 = <?php echo $luas;?></h4>
    <h4>keliling 4 * sisi = <?php echo $keliling;?></h4>

</body>
<img src="belah ketupat.jpg" widht="300" height="300"alt="">

</html>