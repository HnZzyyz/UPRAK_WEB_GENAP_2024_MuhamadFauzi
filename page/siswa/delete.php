<?php
    include '../../config/database.php';

    $sql = 'DELETE FROM siswa WHERE nis='.$_GET['nis'];
    $connect->query($sql);
    header('location: index.php');
?>