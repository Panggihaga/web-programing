<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jajar Genjang</title>
</head>
<a href="index.php">Home</a>
<body>
<?php
    $alas=$_POST['Alas'];
    $tinggi=$_POST['Tinggi'];
    $sisia=$_POST['sisia'];
    $sisib=$_POST['sisib'];
    $luas=$alas*$tinggi;
    $keliling=2*($sisia + $sisib);
    ?>

    <h1>Jajar genjang</h1>
    <h4>luas = alas * tinggi = <?php echo $luas;?></h4>
    <h4>keliling 2 * (sisia + sisib) = <?php echo $keliling;?></h4>
    
</body>
<img src="jajar genjang.jpg" widht="300" height="300"alt="">

</html>