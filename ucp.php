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
<?php
$_SESSION['username'] = $username1;
if(isset(($_POST['submit']))){
$password1 = ($_POST['newPassword']);
$password2 = ($_POST['confirmPassword']);
if ($password1 <> $password2)
{
    echo "your passwords do not match";
}
else if ($password1 == $password2) {
$sql = "UPDATE users SET password='$password1' WHERE username='$username1'";
  $res = $conn->query($sql);
  if ($res === FALSE) {
    echo "Unable to change password";
  }
  else{
    echo "You have successfully changed your password.";
  }
  $conn->close();
}
}
?>



Welcome to the User Control Panel <b><?php echo $_SESSION['username'];?></b>

<form name="frmChange" role="form" class="form-signin" method="POST" action="">

<div class="form-group">

  <label for="InputPassword2">New Password</label>
  <input type="password" class="form-control" id="InputPassword2" placeholder="New Password" name="newPassword">
   <label for="InputPassword3">Confirm New Password</label>
  <input type="password" class="form-control" id="InputPassword3" placeholder="Confirm Password" name="confirmPassword">  </div>
 <button class="btn btn-lrg btn-default btn-block" input type="submit" name="submit">Change it</button>


    </div>


    </form>
<?php
print(load_which("system/templates/footer.tpl.php"));
?>
