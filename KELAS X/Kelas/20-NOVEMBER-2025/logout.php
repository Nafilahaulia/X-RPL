<h1> Anda Sudah Logout</h1>

<?php
    session_start();
    session_destroy();
    header("Location: index.php");
?>