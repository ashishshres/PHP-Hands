<!-- Insert PHP code to destroy the session to logout the user -->
<?php
session_start();
session_unset();
session_destroy();
header("location: ../index.php");
exit;
?>