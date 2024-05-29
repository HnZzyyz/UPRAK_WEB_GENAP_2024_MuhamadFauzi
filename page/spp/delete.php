<?php
    include '../../config/database.php';

    $sql = 'DELETE FROM spp WHERE id='.$_GET['id'];
    $connect->query($sql);
    header('location: index.php');
?>