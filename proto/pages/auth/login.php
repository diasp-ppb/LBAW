<?php
include_once ('../../config/init.php');
include_once ('../../database/account.php');
include_once ('../../utils.php');

$usernameAuth = explode("@", $_SERVER['Mail'])[0];
$email = $_SERVER['Mail'];
$nmec = $_SERVER['UPortoNMec'];

$names = getNames($_SERVER['CommonName']);
$name = $names['first_name'] . ' ' . $names['last_name'];

$usernameDb = getAccountByUsername($usernameAuth);

if ($usernameDb) {
  $_SESSION['id'] = $usernameDb['id'];
}
else {
  $id = createAccount($usernameAuth, $name, 'member');
  $_SESSION['id'] = $id;
}

$_SESSION['username'] = $usernameAuth;
$_SESSION['email'] = $email;
$_SESSION['nmec'] = $nmec;
$_SESSION['name'] = $name;

header("Location: ../home/home.php");
?>
