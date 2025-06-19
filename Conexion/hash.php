<?php
$clave = "123";
$hash = password_hash($clave, PASSWORD_BCRYPT);
echo $hash;
?>
