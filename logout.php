<?php
session_start();
if(isset($_SESSION['loginOK'])){
    unset($_SESSION['loginOK']);
    unset($_SESSION['idKH']);
    header('location: login.php');
}
?>