<?php
include "system/core/init.php";
print(load_which("system/templates/header2.tpl.php"));
session_destroy();
echo(
  'Session has been destoyed');
 ?>

 <?php
 print(load_which("system/templates/footer.tpl.php"));
 ?>
