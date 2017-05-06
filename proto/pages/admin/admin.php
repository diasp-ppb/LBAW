<?php
include_once("../../config/init.php");
include_once("../../database/account.php");
include_once("../../database/topics.php");
include_once("../common/header.php");

$users=getUserOrderedByName();

$totalUsers = countUsers();
$activeUsers= countRecentlyActiveUsers();
$topicCount = countTopics();

$smarty->assign('users', $users);
$smarty->assign('totalUsers',$totalUsers);
$smarty->assign('activeUsers',$activeUsers);
$smarty->assign('topicCount',$topicCount);
$smarty->display('admin/admin.tpl');
?>
