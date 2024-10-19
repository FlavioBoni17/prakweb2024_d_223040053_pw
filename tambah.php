<?php 
require 'functions.php';// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"]) ) {

    if ( tambah($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
        </script>
        ";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data buku</title>
</head>
<body>
    <h1>Tambah data buku</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="judul_buku">Judul Buku :</label>
                <input type="text" name="judul_buku" id="judul_buku" required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
            <label for="penulis">Penulis :</label>
                <input type="text" name="penulis" id="penulis" required>
            </li>
            <li>
                <label for="penerbit">Penerbit :</label>
                <input type="text" name="penerbit" id="penerbit" required>
            </li>
            <li>
                <label for="tanggal_terbit">Tanggal Terbit :</label>
                <input type="date" name="tanggal_terbit" id="tanggal_terbit">
            </li>
            <li>
                <label for="isbn">ISBN :</label>
                <input type="text" name="isbn" id="isbn">
            </li>
            <li>
                <label for="jumlah_halaman">Jumlah Halaman :</label>
                <input type="text" name="jumlah_halaman" id="jumlah_halaman">
            </li>
            <li>
                <label for="bahasa">Bahasa :</label>
                <input type="text" name="bahasa" id="bahasa">
            </li>
            <li>
                <label for="deskripsi">Deskripsi :</label>
                <input type="text" name="deskripsi" id="deskripsi">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>


    </form>
    
</body>
</html>