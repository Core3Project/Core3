<?php
include "system/core/init.php";
print(load_which("system/templates/header.tpl.php"));
?>


<html>
<body>
<head>
</head>
<?php
if (isset($_POST['username'])){
	$username = ($_REQUEST['username']);
	$password = ($_REQUEST['password']);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='$password'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username']= $username;
			$_SESSION['loggedin']= true;
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
}
 ?>

 <form name="frmChange" role="form" class="form-signin" method="POST" action="">

 <div class="form-group">

	 <label for="InputPassword2">New Password</label>
	 <input type="password" class="form-control" id="InputPassword2" placeholder="New Password" name="newPassword">
		<label for="InputPassword3">Confirm New Password</label>
	 <input type="password" class="form-control" id="InputPassword3" placeholder="Confirm Password" name="confirmPassword">  </div>
	<button class="btn btn-lrg btn-default btn-block" input type="submit" name="submit">Change it</button>

<form role="form" method="post" action="" autocomplete="off">
                <div class="form-group col-lg-3">
                    <input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name"  tabindex="1">
                </div>
                <div class="row">
                    <div>
                      <div class="form-group col-lg-3">
                            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3">
                        </div>
                    </div>
                    <div>
                    </div>
                </div>

                <div class="row">
                    <div><input type="submit" name="submit" value="Login" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
                </div>


            </form>
          </body>
</html>
<?php
print(load_which("system/templates/footer.tpl.php"));
?>
