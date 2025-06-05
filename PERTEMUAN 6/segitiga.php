<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Segitiga</title>
</head>
<body>

    <a href="index.php">Home</a>
    <h1>Segitiga</h1>

    <form action="segitigaaction.php" method="post">
        <table>
            <tr>
                <td>Masukkan Alas:</td>
                <td><input type="number" name="alas" required></td>
            </tr>
            <tr>
                <td>Masukkan Tinggi:</td>
                <td><input type="number" name="tinggi" required></td>
            </tr>
            <tr>
                <td>Masukkan Sisi A:</td>
                <td><input type="number" name="sisia" required></td>
            </tr>
            <tr>
                <td>Masukkan Sisi B:</td>
                <td><input type="number" name="sisib" required></td>
            </tr>
            <tr>
                <td>Masukkan Sisi C:</td>
                <td><input type="number" name="sisic" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Hitung Luas dan Keliling"></td>
            </tr>
        </table>
    </form>

</body>
</html>
