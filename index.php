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
<div class="jumbotron">
      <div class="container">
        <h1>Hello!</h1>
        <p>Welcome to the Worlds Most Powerful CMS <b><?php echo $_SESSION['username'];?></b></p>
      </div>
    </div>
<?php
print(load_which("system/templates/footer.tpl.php"));
?>
