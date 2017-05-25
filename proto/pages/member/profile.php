<?php
if (!isset($_GET["id"]) || !preg_match('/^\d+$/', $_GET["id"])) {
    header("Location: ../common/error.php");
}

include_once('../../config/init.php');
include_once("../../database/account.php");
include_once("../../database/email.php");
include_once("../../database/topics.php");

$userid = htmlspecialchars(trim($_GET["id"]));

try {
    $user = getAccountByUserId($userid)[0];
} catch(PDOException $e) {
    saveOnLog("profile.php:", $e);
    header("Location: ../common/error.php?msg=" . $e->getMessage());
    //TODO
}


if (!isset($user)) {
    header("Location: ../common/error.php?msg=" . "Page not found");
}

include_once("../common/header.php");


try {
    $emails = getUserEmailList($userid);
    $links = json_decode(getUserLinks($userid)[0]['links']);
    $topics = getTopicsByUser($userid);
} catch(PDOException $e) {
    saveOnLog("profile.php:", $e);
    //TODO
}


$smarty->assign('user', $user);
$smarty->assign('emails', $emails);
$smarty->assign('links', $links);
$smarty->assign('topics', $topics);
$smarty->display('member/profile.tpl');
?>