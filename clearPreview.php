<?php
session_start();
unset($_SESSION['preview']);
header("Location: addEntry.php");
exit();
?>