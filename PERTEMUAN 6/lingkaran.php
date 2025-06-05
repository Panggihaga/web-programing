<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingkaran</title>
</head>
<body>

    <a href="index.php">Home</a>
    <h1>Lingkaran</h1>

    <form action="lingkaranaction.php" method="post">
        <table>
            <tr>
                <td>Masukkan Diameter:</td>
                <td><input type="number" name="diameter" required></td>
            </tr>
            <tr>
                <td>Masukkan Jari-jari:</td>
                <td><input type="number" name="jarijari" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Hitung Luas dan Keliling"></td>
            </tr>
        </table>
    </form>

</body>
</html>
