<?php
    session_start();
    session_destroy();
    echo "<script>window.open('tlogin.php.php','_self')</script>";
?>