<?php 
    /**
     * NIM : 2257401002
     * NAMA : Ayu Yuliyanti
     * KELAS MI22A
     */ 
    $host       = "localhost";
    $user       = "root";
    $password   = "";
    $dbname     = "uas_ayuyuliyanti";

    $koneksi    = mysqli_connect($host, $user, $password, $dbname);
    if (mysqli_connect_errno()) {
        die("Koneksi Gagal Karena : ". mysqli_connect_error());
    }
?>