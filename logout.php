<?php
include "system/core/init.php";
$_SESSION["login"] = false;
session_destroy();
echo('Session has been destoyed');
 ?>
