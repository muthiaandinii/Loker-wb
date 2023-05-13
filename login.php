<?php

// Menangkap data yang dikirimkan dari form
$email = $_POST['email'];
$password = $_POST['password'];

// Melakukan koneksi ke database
$host = "localhost"; // Sesuaikan dengan host database Anda
$user = "root"; // Sesuaikan dengan username database Anda
$pass = ""; // Sesuaikan dengan password database Anda
$db = "loker_website_db"; // Sesuaikan dengan nama database Anda

$conn = mysqli_connect($host, $user, $pass, $db);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Melakukan query untuk memeriksa apakah email dan password sesuai
$sql = "SELECT * FROM login WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1) {
  $user = mysqli_fetch_assoc($result);
  if(password_verify($password, $user['password'])) {
    // Login sukses, arahkan ke halaman dashboard
    header("Location: index-pelamar.php");
    exit();
  }
}

// Jika email atau password salah, kembali ke halaman login
header("Location: lagi.php");

mysqli_close($conn);

?>