<?php
    if(!isset($_SESSION['user'])){
        $_SESSION['noLogin'] = "Please Login Admin Panel";

        header('location:' .SITEURL. 'admin/login.php');
    }


?> 