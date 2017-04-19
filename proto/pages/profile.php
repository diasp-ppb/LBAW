<?php
include_once("../database/account.php");
include_once("../templates/header.php");

$userid = $_GET["id"];
$user = getAccountByUserId($userid)[0];

$smarty->assign('user', $user);
$smarty->display('profile.tpl');

include_once("../templates/footer.php");
?>
