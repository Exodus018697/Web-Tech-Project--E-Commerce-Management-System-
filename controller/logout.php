<?php
    session_start();
    session_destroy();
   // header("Location: ../index.php");
   header("Location: ../view/sign_in.php");
    exit();
?>