<?php
session_start();
include 'koneksi.php';

$username = $_POST ['username'];
$password = $_POST ['password'];

$login = mysqli_query ($mysqli, "select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    if($data['level']=="admin"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";

        header("location:Project/admin/admin.php");

    } else if($data['level']=="user"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "user";

        header("location:Project/explore.html");

    } else {
        header("location:login.html");
    }
} else {
    header("location:login.html?pesan=gagal");
}