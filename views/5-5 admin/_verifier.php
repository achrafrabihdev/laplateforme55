<?php
session_start();
if(!isset($_SESSION['admin']) || $_SESSION['admin']!='ilyass'){
    header('location:../5-5 admin/login.php');
}
?>