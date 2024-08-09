<?php
 /**
     * NIM : 2257401002
     * NAMA : Ayu Yuliyanti
     * KELAS MI22A
     */ 
session_start();
if (!isset($_SESSION['tbl_user'])){
    $_SESSION['error'] = "Login Dahulu";
    header('location: login.php');
}

?>