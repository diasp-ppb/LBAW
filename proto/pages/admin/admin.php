<?php
include_once("../../config/init.php");
include_once("../../database/account.php");
include_once("../../database/topics.php");

/*
if (!isset($_SESSION['id']) || $_SESSION['status'] != 'admin') {
    header("Location: ../common/error.php");
}
*/

include_once("../common/header.php");

try {
    $users=getUserOrderedByName();
    $totalUsers = countUsers();
    $activeUsers= countRecentlyActiveUsers();
    $topicCount = countTopics();
} catch(PDOException $e) {
    saveOnLog("Admin page:", $e);
    //TODO
}

$smarty->assign('users', $users);
$smarty->assign('totalUsers',$totalUsers);
$smarty->assign('activeUsers',$activeUsers);
$smarty->assign('topicCount',$topicCount);
$smarty->display('admin/admin.tpl');
?>
