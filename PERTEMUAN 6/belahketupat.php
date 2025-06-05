<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belah Ketupat</title>
</head>
<body>
    <h2>Hitung Luas dan Keliling Belah Ketupat</h2>
    <form action="belahketupataction.php" method="post">
        <table>
            <tr>
                <td>Masukkan Diagonal 1</td>
                <td>:</td>
                <td><input type="number" name="d1" id="d1" required></td>
            </tr>
            <tr>
                <td>Masukkan Diagonal 2</td>
                <td>:</td>
                <td><input type="number" name="d2" id="d2" required></td>
            </tr>
            <tr>
                <td>Masukkan Sisi</td>
                <td>:</td>
                <td><input type="number" name="sisi" id="sisi" required></td>
            </tr>
            <tr>
                <td>Pilih</td>
                <td>:</td>
                <td>
                    <input type="radio" name="pilih" value="luas" id="luas" required>
                    <label for="luas">Luas</label><br>
                    <input type="radio" name="pilih" value="keliling" id="keliling">
                    <label for="keliling">Keliling</label><br>
                    <input type="radio" name="pilih" value="semua" id="semua">
                    <label for="semua">Luas dan Keliling</label><br>
                </td>
            </tr>
        </table>
        <input type="submit" value="Hitung">
    </form>
    <a href="index.php"><button type="button">Home</button></a>
</body>
</html>
