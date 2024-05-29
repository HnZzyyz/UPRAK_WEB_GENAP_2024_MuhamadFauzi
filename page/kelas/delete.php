<?php
    include '../../config/database.php';

    $sql = 'DELETE FROM kelas WHERE id='.$_GET['id'];
    $connect->query($sql);
    header('location: index.php');
?>