<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD With AJAX</title> 
</head>
<body>
    <table border="1" style="width:70%;">
        <thead>
            <tr>
                <td>No</td>
                <td>Nama Barang</td>
                <td>Harga Barang</td>
                <td>Stok</td>
                <td>Option</td>
            </tr>
        </thead>
        <tbody class="targetData">

        </tbody>
    </table>
    <br>
    <hr>
    <br>
    <table>
        <tr><td>ID Barang</td><td><input type="text" class="txt_id" disabled></td></tr>
        <tr><td>Nama Barang</td><td><input type="text" class="txt_nama_barang"></td></tr>
        <tr><td>Harga Barang</td><td><input type="number" class="txt_harga_barang"></td></tr>
        <tr><td>Stok</td><td><input type="number" class="txt_stok"></td></tr>
        <tr><td></td><td>
            <button class="btn-tambah">Tambah</button>
            <button class="btn-ubah" style="display:none;">Simpan</button>
            <button class="btn-batal" style="display:none;">Batal</button>
        </td></tr>
    </table>

<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/tools.js"></script>
</body>
</html>