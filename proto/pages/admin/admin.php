<?php
include_once("../../config/init.php");
include_once("../../database/account.php");
include_once("../common/header.php");

$users=getUserOrderedByName();

$smarty->assign('users', $users);
$smarty->display('admin/admin.tpl');
?>
