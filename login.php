<?php
include "system/core/init.php";
print(load_which("system/templates/header.tpl.php"));
?>


<html>
<body>
<head>
</head>
<?php
include "system/core/auth.php";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$UN = test_input($_POST["username"]);
		$PW = test_input($_POST["password"]);
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}


 ?>

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
