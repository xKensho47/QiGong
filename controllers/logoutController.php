<?php
    session_start();
    session_unset();
    session_destroy();
    header('Location: ' . $base_url . '/QiGong/public/index.php');
    exit();
?>