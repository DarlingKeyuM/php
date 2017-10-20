<?php
   session_start();
   unset($_SESSION['success']) ;
   unset($_SESSION['username']) ;
   header("location:index.php");


?>