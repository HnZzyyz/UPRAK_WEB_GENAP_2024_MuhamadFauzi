<?php 
include "../../config/database.php";


    $sql = "insert into siswa(
        nis,nama_lengkap,tanggal_lahir,jenis_kelamin,alamat,no_hp,spp_id,kelas_id) values('".$_POST['nis']."','".$_POST['nama_lengkap']."','".$_POST['tanggal_lahir']."','".$_POST['jenis_kelamin']."','".$_POST['alamat']."','".$_POST['no_hp']."','".$_POST['spp']."','".$_POST['kelas']."')";
        
    $connect->query($sql);
    header('location:index.php');

?>