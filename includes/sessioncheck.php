<?php 
    session_start();
    if(!isset($_SESSION['email'])){
        echo"<script>location.href='index.php'</script>";
    }
?>