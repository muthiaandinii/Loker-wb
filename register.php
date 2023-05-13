<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "loker_website_db");

// Validasi input
if (isset($_POST['password']) && isset($_POST['name']) && isset($_POST['email'])) {
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);

  // Enkripsi password
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // Query SQL untuk memeriksa apakah username atau email sudah digunakan
  $query = "SELECT * FROM login WHERE email='$email'";
  $result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result) > 0) {
    // Username atau email sudah digunakan
    echo "Username atau email sudah digunakan!";
  } else {
    // Tambahkan data ke database
    $query = "INSERT INTO login (password, name, email) VALUES ('$hashed_password', '$name', '$email')";
    $result = mysqli_query($conn, $query);

    if($result) {
      // Registrasi sukses, arahkan ke halaman login
      header("Location: lagi.php");
      exit();
    } else {
      // Terjadi kesalahan
      echo "Terjadi kesalahan saat melakukan registrasi!";
    }
  }
}
?>