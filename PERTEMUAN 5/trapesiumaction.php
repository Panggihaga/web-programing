<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trapesium</title>
</head>
<body>
<?php
    $a=$_POST ['a'];
    $b=$_POST ['b'];
    $c=$_POST ['c'];
    $d=$_POST ['d'];
    $tinggi=$_POST ['tinggi'];
    $luas=1/2*($a*$b)*$tinggi;
    $keliling=$a+$b+$c+$d;

    ?>
<a href="index.php">Home</a>
    <h1>Trapesium</h1>

    <h4>Luas = 1/2 x ( a x b ) x tinggi = <?php echo $luas;?></h4>
    <h4>keliling = a + b + c + d = <?php echo $keliling;?></h4>
    <img src="trapesium.jpg" alt="">
</body>
</html>