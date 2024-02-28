<?php
require 'koneksi.php';
$email = $_POST['email'];
$nama = $_POST['nama'];
$lokasi = $_POST['lokasi'];
$harga = $_POST['harga'];
$tanggal = $_POST['tanggal'];
$transportasi = $_POST['transportasi'];

$query_sql = "INSERT INTO tiket (email, nama, lokasi, harga, tanggal, transportasi)
VALUES ('$email', '$nama', '$lokasi', '$harga', '$tanggal', '$transportasi')";


if(mysqli_query($mysqli, $query_sql)) {
    header("location:booking.html");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($mysqli);
}
