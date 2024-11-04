<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Barang</title>
</head>
<body>
    <h1> From Input Data Barang</h1>
    <form action="tambah-data.php" method="get">
        <label for="nama-barang">Nama Barang</label>
        <input type="text" name="nama-barang"/><br/>
        <label for="harga">Harga</label>
        <input type="number" name="harga"/><br/>
        <label for="stok">Stok</label>
        <input type="number" name="stok"/><br/>
        <label for="kategori">Kategori</label>
        <select name="kategori">
            <option value="Fashion">Fashion</option>
            <option value="Food">Food</option>
            <option value="Kesehatan">Kesehatan</option>
        </select>
        <button>Simpan</button>
    </form>
</body>
</html>