<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belah Ketupat</title>
</head>
<body>
<?php
    $d1=$_POST ['d1'];
    $d2=$_POST ['d2'];
    $s=$_POST ['s'];
    $luas=1/2*$d1*$d2;
    $keliling=4*$s;

    ?>
<a href="index.php">Home</a>
<h1>Belah Ketupat</h1>

    <h4>Luas = 1/2 x d1 x d2 = <?php echo $luas;?></h4>
    <h4>keliling = 4 x s = <?php echo $keliling;?></h4>
    <img src="belah ketupat.jpg" alt="">
</body>
</html>