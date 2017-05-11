<?php
include 'system/core/init.php';
if (isset($_SESSION['loggedin'])){
   if($_SESSION['loggedin'] = true){
    print(load_which("system/templates/header.tpl.php"));
  } else {
    print(load_which("system/templates/header2.tpl.php"));
    }
}
?>

Welcome to the Worlds Most Powerful CMS <?php echo $_SESSION['username'];?>

<?php
print(load_which("system/templates/footer.tpl.php"));
?>
