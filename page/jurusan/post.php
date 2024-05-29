<?php 
include "../../config/database.php";

$sql = "insert into spp(
    id,tahun,nominal) values('".$_POST['id']."','".$_POST['tahun']."','".$_POST['nominal']."')";
    
$connect->query($sql);
header('location:index.php');
?>