<?php
session_start();

if(isset($_SESSION['user_id'])) {
  header("Location: index-pelamar.php");
  exit();
}

require_once 'dbconnect.php';

if(isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE email = ?";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: login.php?error=sqlerror");
    exit();
  } else {
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result) == 1) {
      $user = mysqli_fetch_assoc($result);
      if(password_verify($password, $user['password'])) {
        // Login sukses, simpan data user ke session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['user_nama'] = $user['nama'];

        // Redirect ke halaman dashboard
        header("Location: index-pelamar.php");
        exit();
      } else {
        header("Location: login.php?error=wrongpwd");
        exit();
      }
    } else {
      header("Location: login.php?error=notfound");
      exit();
    }
  }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>

    <h2>Login</h2>

    <?php
  // Tampilkan pesan error jika ada
  if(isset($_GET['error'])) {
    if($_GET['error'] == "sqlerror") {
      echo '<p>Terjadi kesalahan saat menjalankan perintah SQL</p>';
    } else if($_GET['error'] == "wrongpwd") {
      echo '<p>Email atau password salah</p>';
    } else if($_GET['error'] == "notfound") {
      echo '<p>Email tidak ditemukan</p>';
    }
  }
  ?>

    <form method="post">
        <div>
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <button type="submit" name="submit">Login</button>
        </div>
    </form>

</body>

</html>