<?php
// Inisialisasi session
session_start();

// Hapus semua variabel session
session_unset();

// Hapus session
session_destroy();

// Alihkan pengguna ke halaman login
header("#");
exit();
?>