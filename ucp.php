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

session_start();

if(isset(($_POST['submit']))){
$password1 = mysqli_real_escape_string($conn, $_POST['newPassword']);
$password2 = mysqli_real_escape_string($conn, $_POST['confirmPassword']);
$username = mysqli_real_escape_string($conn, $_SESSION['username']);

if ($password1 <> $password2)
{
    echo "your passwords do not match";
}
else if (mysqli_query($conn, "UPDATE users SET password='$password1' WHERE username='$username'"))
{
    echo "You have successfully changed your password.";
}
else
{
    mysqli_error($conn);
}
mysqli_close($conn);
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
