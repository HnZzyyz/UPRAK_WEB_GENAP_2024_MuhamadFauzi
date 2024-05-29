<?php 
include "../../config/database.php";

$sql = "insert into spp(
    id,kode_kelas,tingkat,jurusan_id) values('".$_POST['id']."','".$_POST['kode_kelas']."','".$_POST['tingkat']."','".$_POST['jurusan_id']."')";
    
$connect->query($sql);
header('location:index.php');
?>