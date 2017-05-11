<?php
include 'system/core/init.php';
print(load_which("system/templates/header.tpl.php"));
?>

Welcome to the Worlds Most Powerful CMS <?php echo $_SESSION['username'];?>


<?php
print(load_which("system/templates/footer.tpl.php"));
 ?>
