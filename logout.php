<?php
//sesion start

session_start();

unset($_SESSION['id_user']);
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['fullname_pengguna']);


session_destroy();
echo "<script>
            alert('anda telah keluar dari halaman buku alamat');
            document.location ='index.php'
        </script>";