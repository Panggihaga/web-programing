<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Identitas</title>
</head>
<body>
    <h1>MASUKKAN NAMA IDENTITAS ANDA</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="nama">Identitas Nama:</label></td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td><label for="telepon">Isikan Nomor Telepon:</label></td>
                <td><input type="number" name="telepon" id="telepon"></td>
            </tr>
            <tr>
                <td><label for="alamat">Isikan Alamat:</label></td>
                <td><textarea name="alamat" id="alamat" cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Tampil">
                    <input type="reset" value="Batal">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
