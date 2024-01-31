<?php
    // session_start();
    // unset($_SESSION["user"]);
    // header("location:index.php");
    session_start();

    session_destroy();

    header("location:index.php");

?>