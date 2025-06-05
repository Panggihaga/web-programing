<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jajar Genjang</title>
</head>
<body>
<?php
    $alas=$_POST ['alas'];
    $tinggi=$_POST ['tinggi'];
    $a=$_POST ['a'];
    $b=$_POST ['b'];
    $luas=$alas*$tinggi;
    $keliling=2*($a+$b);

    ?>
<a href="index.php">Home</a>
    <h1>Jajar Genjang</h1>

    <h4>Luas = Alas x Tinggi = <?php echo $luas;?></h4>
    <h4>keliling = 2 x (a + b )= <?php echo $keliling;?></h4>
    <img src="jajar genjang.jpg" alt="">
</body>
</html>