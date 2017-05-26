<?php
include_once ('../../config/init.php');
include_once ('../../database/account.php');
include_once ('../../utils.php');


$usernameAuth = explode("@", $_SERVER['Mail'])[0];
$email = $_SERVER['Mail'];
$nmec = $_SERVER['UPortoNMec'];

$names = getNames($_SERVER['CommonName']);
$name = $names['first_name'] . ' ' . $names['last_name'];

$userDb = getAccountByUsername($usernameAuth);

if ($userDb) {
  $_SESSION['id'] = $userDb['id'];
  $_SESSION['usertype'] = $userDb['usertype'];
}
else {
  try {
    $id = createAccount($usernameAuth, $name, 'member');
    $_SESSION['id'] = $r['id'];
    $_SESSION['usertype'] = 'member';
  } catch (PDOException $e) {
    print_r($e->getMessage());
  }
}

$_SESSION['username'] = $usernameAuth;
$_SESSION['email'] = $email;
$_SESSION['nmec'] = $nmec;
$_SESSION['name'] = $name;

header("Location: ../home/home.php");
?>
