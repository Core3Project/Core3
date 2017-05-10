<?php
include "system/core/init.php";
print(load_which("system/templates/header.tpl.php"));
?>


<html>
<body>
<head>

</head>

<?php
if(isset(($_POST['submit']))){

  $username = ($_POST['username']);
  $email = ($_POST['email']);
  $password = ($_POST['password']);

$sql = "INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
  $res = $conn->query($sql);
  if ($res === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  else{
    echo "User successfully registered";
  }
  $conn->close();

}

 ?>
 <form class="form-horizontal" role="form" method="post" action="" autocomplete="off">
   <fieldset>
     <div id="legend">
       <legend class="">Register</legend>
     </div>
     <div class="control-group">
       <!-- Username -->
       <label class="control-label"  for="username">Username</label>
       <div class="controls">
         <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
         <p class="help-block">Username can contain any letters or numbers, without spaces</p>
       </div>
     </div>

     <div class="control-group">
       <!-- E-mail -->
       <label class="control-label" for="email">E-mail</label>
       <div class="controls">
         <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
         <p class="help-block">Please provide your E-mail</p>
       </div>
     </div>

     <div class="control-group">
       <!-- Password-->
       <label class="control-label" for="password">Password</label>
       <div class="controls">
         <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
         <p class="help-block">Password should be at least 4 characters</p>
       </div>
     </div>
     <div class="control-group">
       <!-- Button -->
       <div class="controls">
         <button class="btn btn-success" input type="submit" name="submit" value="Register">Register</button>
       </div>
     </div>
   </fieldset>
 </form>

<!--
<form role="form" method="post" action="" autocomplete="off">
                <div class="form-group col-lg-2">
                    <input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" tabindex="1">
                </div>
                <div class="form-group col-lg-2">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="2">
                </div>
                <div class="row">
                    <div>
                        <div class="form-group col-lg-2">
                            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3">
                        </div>
                    </div>
                    <div>
                    </div>
                </div>

                <div class="row">
                  <center>  <div class="form-group col-lg-2"><input type="submit" name="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="5"></div></center>
                </div>


            </form>
          -->
          </body>
</html>
<?php
print(load_which("system/templates/footer.tpl.php"));
?>
