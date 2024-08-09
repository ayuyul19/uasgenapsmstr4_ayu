<?php
     /**
     * NIM : 2257401002
     * NAMA : Ayu Yuliyanti
     * KELAS MI22A
     */ 
    session_start();
    session_destroy();
    session_unset();

    header('location:login.php');
?>