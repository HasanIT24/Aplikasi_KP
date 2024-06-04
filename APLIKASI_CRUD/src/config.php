<?php

 // Koneksi Database
 $server = "localhost";
 $user = "root";
 $password = "";
 $database = "aplikasi_crud";

 //Buat Koneksi
 $koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

?>
