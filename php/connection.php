<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "projectpemweb";

    $connect = mysqli_connect($hostname, $username, $password, $database);
    if($connect){
        echo "Koneksi dengan MySQL berhasil.";
    } else{
        echo "Koneksi dengan MySQL gagal." . mysqli_connect_error();
    }
?>