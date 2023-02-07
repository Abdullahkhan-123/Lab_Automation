<?php

// include constant.phpfor url
include('constant.php');

    echo "<script>
        window.location.href='../index.php';
    </script>";

    session_destroy();
?>