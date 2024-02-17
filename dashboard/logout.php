<?php

session_start();
unset($_SESSION['loggedInUser']);
session_destroy();
 echo"<script> alert('logout successfully')</script>";
    echo "<script>window.location.href='../index.php'</script>";


?>