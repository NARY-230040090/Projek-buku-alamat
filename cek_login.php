<?php

// Aktifkan session
session_start();

// Panggil koneksi database
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    @$username = mysqli_escape_string($koneksi, $_POST['username']);
    @$password = $_POST['password']; // Password asli, tanpa md5

    // Query untuk mendapatkan data user berdasarkan username
    $login = mysqli_query($koneksi, "SELECT * FROM data_user WHERE username = '$username' AND status = 'Aktif'");
    $data = mysqli_fetch_array($login);

    // Uji jika data user ditemukan
    if ($data) {
        // Verifikasi password yang diinput dengan hash yang tersimpan
        if (password_verify($password, $data['password'])) {
            // Simpan informasi user di session
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['fullname_pengguna'] = $data['fullname_pengguna'];

            // Arahkan ke halaman admin (dashboard)
            header('Location: admin.php');
            exit;
        } else {
            echo "<script>
                    alert('Login gagal! Password Anda salah.');
                    document.location='index.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Login gagal! Username tidak ditemukan atau akun tidak aktif.');
                document.location='index.php';
              </script>";
    }
}

?>
