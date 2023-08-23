<?php
session_start();
session_destroy();
echo "<script>window.open('main.html','_self')</script>";
?>