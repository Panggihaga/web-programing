<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Persegi Panjang</title>
</head>
<body>

    <a href="index.php">Home</a>
    <h1>Persegi Panjang</h1>

    <form action="persegipanjangaction.php" method="post">
        <table>
            <tr>
                <td>Masukkan Panjang:</td>
                <td><input type="number" name="panjang" required></td>
            </tr>
            <tr>
                <td>Masukkan Lebar:</td>
                <td><input type="number" name="lebar" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Hitung Luas dan Keliling"></td>
            </tr>
        </table>
    </form>

</body>
</html>
