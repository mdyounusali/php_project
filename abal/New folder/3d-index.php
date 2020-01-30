<?php
// Init - Redirect users to the login page if not signed in
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "2a-config.php";
if (!is_array($_SESSION['user'])) {
  header("Location: 3a-login.php");
  die();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Login Example
    </title>
    <script src="public/3b-login.js"></script>
  </head>
  <body>
    <p>
      Successfully Signed In!
    </p>
    <input type="button" value="Logout" onclick="logout()"/>
  </body>
</html>