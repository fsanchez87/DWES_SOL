<?php
unset($_COOKIE['ckNombre']);
unset($_COOKIE['ckEmail']);
setcookie('ckNombre', "", time()-1);
setcookie('ckEmail', "", time()-1);
header("Location: index.php");
?>