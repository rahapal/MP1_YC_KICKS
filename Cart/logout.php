<?php
session_start();
session_destroy();
header("Location: displayproduct.php");
?>