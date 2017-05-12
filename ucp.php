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
$username1 = $_SESSION['username'];
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

<div class="container"><h2>User Control Panel</h2></div>

<div id="exTab2" class="container">
<ul class="nav nav-tabs">
			<li class="active">
        <a  href="#1" data-toggle="tab">Overview</a>
			</li>
			<li><a href="#2" data-toggle="tab">Change Password</a>
			</li>
			<li><a href="#3" data-toggle="tab">Change Email</a>
			</li>
		</ul>

			<div class="tab-content ">
			  <div class="tab-pane active" id="1">
          <h3>Welcome to the User Control Panel <b><?php echo $_SESSION['username'];?></b></h3>
				</div>
				<div class="tab-pane" id="2">
          <form name="frmChange" role="form" class="form-signin" method="POST" action="">

          <div class="form-group">

            <label for="InputPassword2">New Password</label>
            <input type="password" class="form-control" id="InputPassword2" placeholder="New Password" name="newPassword">
             <label for="InputPassword3">Confirm New Password</label>
            <input type="password" class="form-control" id="InputPassword3" placeholder="Confirm Password" name="confirmPassword">  </div>
           <button class="btn btn-lrg btn-default btn-block" input type="submit" name="submit">Change it</button>
				</div>
        <div class="tab-pane" id="3">
          <form name="frmChange" role="form" class="form-signin" method="POST" action="">

          <div class="form-group">

            <label for="InputEmail2">New Email</label>
            <input type="email" class="form-control" id="InputEmai;2" placeholder="New Email" name="newEmail">
             <label for="InputEmail3">Confirm New Email</label>
            <input type="email" class="form-control" id="InputEmail3" placeholder="Confirm Email" name="confirmEmail">  </div>
           <button class="btn btn-lrg btn-default btn-block" input type="submit" name="submit">Change it</button>
				</div>
			</div>
  </div>




    </div>


    </form>
<?php
print(load_which("system/templates/footer.tpl.php"));
?>
