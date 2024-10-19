<?php 

// KONEKSI KE DATABASE
$conn = mysqli_connect("localhost", "root", "", "prakweb2024_d_223040053_pw");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
    
}




function tambah($data) {
    global $conn;
      // ambil data dari tiap elemen dalam form
    $id = $data["id_buku"];
    $judul_buku = htmlspecialchars($data["judul_buku"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $tanggal_terbit = htmlspecialchars($data["tanggal_terbit"]);
    $isbn = htmlspecialchars($data["isbn"]);
    $jumlah_halaman = htmlspecialchars($data["jumlah_halaman"]);
    $bahasa = htmlspecialchars($data["bahasa"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    // query insert data
    $query = "INSERT INTO buku (judul_buku, gambar, penulis, penerbit, tanggal_terbit, isbn, jumlah_halaman, bahasa, deskripsi)
        VALUES ('$judul_buku', '$gambar', '$penulis', '$penerbit', '$tanggal_terbit', '$isbn', '$jumlah_halaman', '$bahasa', '$deskripsi')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM buku WHERE id_buku = $id");

    return mysqli_affected_rows($conn);
}


function ubah($data) {
    global $conn;

    $id = $data["id_buku"];
    $judul_buku = htmlspecialchars($data["judul_buku"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $tanggal_terbit = htmlspecialchars($data["tanggal_terbit"]);
    $isbn = htmlspecialchars($data["isbn"]);
    $jumlah_halaman = htmlspecialchars($data["jumlah_halaman"]);
    $bahasa = htmlspecialchars($data["bahasa"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    // query insert data
    $query = "UPDATE buku SET 
                        judul_buku = '$judul_buku',
                        gambar = '$gambar',
                        penulis = '$penulis',
                        penerbit = '$penerbit',
                        tanggal_terbit = '$tanggal_terbit',
                        isbn = '$isbn',
                        jumlah_halaman = '$jumlah_halaman',
                        bahasa = '$bahasa',
                        deskripsi = '$deskripsi'
                    WHERE id_buku = $id
                        ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>