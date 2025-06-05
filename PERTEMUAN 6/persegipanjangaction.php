<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi Panjang</title>
</head>
<a href="index.php">Home</a>
<body>
    <?php
    $panjang=$_POST['panjang'];
    $lebar=$_POST['lebar'];
    $luas=$panjang*$lebar;
    $keliling=2*($panjang+$lebar);
    ?>
    <h1>Persegi panjang</h1>
    <h2>Luas = panjang x lebar = <?php echo $luas;?></h2>
    <h3>keliling  2 x (panjang + lebar) = <?php echo $keliling;?></h3>
    
</body>
<img src="Persegipanjang.jpg" widht="300" height="300"alt="">
</html>