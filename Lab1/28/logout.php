<?php
session_start();


session_unset();
session_destroy();



setcookie('username', '', time() - 1);
setcookie('password', '', time() - 1);


echo "Logging out...";


header('Location: 28.php');
exit();
?>
