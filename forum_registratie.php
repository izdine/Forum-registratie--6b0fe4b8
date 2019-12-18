<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <h1><b> Form registratie </b></h1>
    <form action="registratie_handler.php" method="post">

    <input type="text" name="username" value="" placeholder="Username" minlength="4" maxlength=" 10"> <b>Username</b>
    <p></p>
    <input type="text" id="E-mail"placeholder="Wat is je E-mail" name="mail" minlength="4"> <b>E-mail</b>
    <p></p>
    <input type="text" name="age" value="" placeholder="Age"> <b>Age</b>
    <p></p>
    <input type="submit" name="button" value="Submit"></input>

    </form>
<?php
$email = $_POST["mail"];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo "E-mailadres is gelidig ";
}
else {
echo "E-mailadres is niet gelidig";
}
 ?>

  </body>
</html>
