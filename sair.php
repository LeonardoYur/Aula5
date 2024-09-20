<?php
session_start();
session_destroy();
header('Location: mostra.php');
exit();
?>
