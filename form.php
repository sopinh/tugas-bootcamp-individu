<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pembelian</title>
    <style>
		fieldset{
			width: 350px;
			border-color: black;
		}
        body {
            text-align: center;
        }
        .button-container {
            margin-top: 20px;
            text-align: center;
        }

        .button-container input[type="submit"],
        .button-container input[type="reset"] {
            margin: 0 10px;
        }
</style>
</head>
<body>
    <fieldset>
        <legend align="center">Form Pembelian</legend>
        <pre>------------------------------------------</pre>
    <h4 align="center">Toko Cat Guna Bangun Jaya</h4>
        <pre>------------------------------------------</pre>
    <form action="hitung.php" method="POST">
        <pre>Nama Customer : <input type="text" name="nama"></pre>
        <pre>Alamat        : <input type="text" name="alamat"></pre>
        <pre>Jenis Cat     : <select name="jenis" id="">
            <option value="Bituminous Paint">Bituminous Paint</option>
            <option value="Chlorinated Rubber">Chlorinated Rubber</option>
            <option value="Vinyl">Vinyl</option>
        </select></pre>
        <pre>Warna Cat     : <input type="radio" name="warna" id="" value="Merah">Merah<input type="radio" name="warna" id="" value="Biru">Biru<input type="radio" name="warna" id="" value="Kuning">Kuning</pre>
        <pre>Jumlah Beli   : <input type="number" name="jumlah_beli"></pre>
        <pre>------------------------------------------</pre>
        <div class="button-container">
        <input type="submit" name="btn_submit" value="Submit">
        <input type="reset" name="btn_reset" value="Reset">
        </div>
        <pre>------------------------------------------</pre>
    </form>
    </fieldset>
</body>
</html>