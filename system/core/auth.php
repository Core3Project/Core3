<?php
session_start();
include "config.php";

function Login($UN, $PW){
    $sql = "SELECT ID, Username, Password FROM users WHERE Username=\"" . $UN ."\"" and "Password=\"" . $PW ."\"";
    $result = SendSQL($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
			       $_SESSION["login"] = true;
             GetRole();
             header('Location: UserHome.php') ;
        }
    } else {
        $output .= "<tr>No results</tr>";
        echo $output;
		    $_SESSION["login"] = false;
    }
  }


 ?>
