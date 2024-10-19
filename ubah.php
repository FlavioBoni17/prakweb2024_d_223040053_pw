<?php 
require 'functions.php';

// ambil data dari url
$id = $_GET["id_buku"];


// query data buku berdasarkan id
$buk = query("SELECT * FROM buku WHERE id_buku = $id")[0];
// cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"]) ) {

    if ( ubah($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil diubah!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal diubah!');
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
    <title>Edit data buku</title>
</head>
<body>
    <h1>Edit data buku</h1>

    <form action="" method="post">
        <input type="hidden" name="id_buku" value="<?= $buk["id_buku"]; ?>">
        <ul>
            <li>
                <label for="judul_buku">Judul Buku :</label>
                <input type="text" name="judul_buku" id="judul_buku" required value="<?= $buk["judul_buku"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" required value="<?= $buk["gambar"]; ?> ">
            </li>
            <li>
            <label for="penulis">Penulis :</label>
                <input type="text" name="penulis" id="penulis" required  value="<?= $buk["penulis"]; ?> ">
            </li>
            <li>
                <label for="penerbit">Penerbit :</label>
                <input type="text" name="penerbit" id="penerbit" required  value="<?= $buk["penerbit"]; ?> ">
            </li>
            <li>
                <label for="tanggal_terbit">Tanggal Terbit :</label>
                <input type="date" name="tanggal_terbit" id="tanggal_terbit"  value="<?= $buk["tanggal_terbit"]; ?> ">
            </li>
            <li>
                <label for="isbn">ISBN :</label>
                <input type="text" name="isbn" id="isbn"  value="<?= $buk["isbn"]; ?> ">
            </li>
            <li>
                <label for="jumlah_halaman">Jumlah Halaman :</label>
                <input type="text" name="jumlah_halaman" id="jumlah_halaman"  value="<?= $buk["jumlah_halaman"]; ?> ">
            </li>
            <li>
                <label for="bahasa">Bahasa :</label>
                <input type="text" name="bahasa" id="bahasa"  value="<?= $buk["bahasa"]; ?> ">
            </li>
            <li>
                <label for="deskripsi">Deskripsi :</label>
                <input type="text" name="deskripsi" id="deskripsi"  value="<?= $buk["deskripsi"]; ?> ">
            </li>
            <li>
                <button type="submit" name="submit">Edit Data!</button>
            </li>
        </ul>


    </form>
    
</body>
</html>