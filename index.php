<?php 
require 'functions.php';
$buku = query("SELECT * FROM buku");

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Buku</title>
</head>
<body>

<h1>Daftar Buku</h1>

<a href="tambah.php">Tambah data buku</a>
<br>

<table border="1" cellpadding = "10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Judul Buku</th>
        <th>Gambar</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tanggal Terbit</th>
        <th>ISBN</th>
        <th>Jumlah Halaman</th>
        <th>Bahasa</th>
        <th>Deskripsi</th>
        <th>Action</th>
    </tr>

    <?php  $i = 1; ?>
    <?php foreach( $buku as $row ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $row["judul_buku"]; ?></td>
        <td><img src="img/<?= $row["gambar"]; ?>" alt="" width="50"></td>
        <td><?= $row["penulis"]; ?></td>
        <td><?= $row["penerbit"]; ?></td>
        <td><?= $row["tanggal_terbit"]; ?></td>
        <td><?= $row["isbn"]; ?></td>
        <td><?= $row["jumlah_halaman"]; ?></td>
        <td><?= $row["bahasa"]; ?></td>
        <td><?= $row["deskripsi"]; ?></td>
        <td>
            <a href="ubah.php?id_buku=<?= $row["id_buku"]?>">Edit</a> |
            <a href="hapus.php?id_buku=<?= $row["id_buku"]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus'); ">Delete</a>
        </td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
</table>
</body>
</html>