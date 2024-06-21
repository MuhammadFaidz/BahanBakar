<?php
    include 'bahanbakar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bahanbakarShell</title>
</head>
<body><center>
    <form action="result.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="jumlah">Masukan Liter</label>
                    <input type="number" placeholder="Masukan dengan Angka" min="0" name="jumlah" id="jumlah">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jenis">Bahan Bakar :</label>
                    <select name="jenis" id="jenis">
                        <option disabled selected>Pilih Disini</option>
                        <option value="ssuper">Ssuper</option>
                        <option value="svpower">SVpower</option>
                        <option value="svpowerDiesel">SVpowerDiesel</option>
                        <option value="svpowerNitro">SVpowerNitro</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" name="kirim">Beli</button>
    </form>
</center></body>
</html>
