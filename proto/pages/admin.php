<?php
include_once("../config/init.php");
include_once("../database/account.php");
include_once("../pages/header.php");

$users=getUserOrderedByName();

$smarty->assign('users',$users);
$smarty->display('admin.tpl');
?>
