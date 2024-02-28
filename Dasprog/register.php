<?php
require 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$query_sql = "INSERT INTO user (username, password, level)
VALUES ('$username', '$password', '$level')";


if(mysqli_query($mysqli, $query_sql)) {
    header("location:login.html");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($mysqli);
}
