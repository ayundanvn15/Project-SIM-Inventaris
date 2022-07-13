<?php
session_start();

//unset($_SESSION['nama']);
//unset($_SESSION['level']);
session_destroy();
echo "<script>alert('Thanks you, you have successfully logout')</script>";
echo "<meta http-equiv='refresh' content='1 url=login.php'>";
?>


