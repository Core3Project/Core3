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
 <div class="container">
 <form name="frmChange" role="form" class="form-signin" method="POST" action="">

 <div class="form-group">

	 <label for="InputPassword2">Username</label>
	 <input type="useranme" class="form-control" id="username" placeholder="User Name" name="username">
		<label for="InputPassword3">Password</label>
	 <input type="password" class="form-control" id="password" placeholder="Password" name="password">  </div>
	<button class="btn btn-lrg btn-default btn-block" input type="submit" name="submit">Login</button>
</div>

          </body>
</html>
<?php
print(load_which("system/templates/footer.tpl.php"));
?>
