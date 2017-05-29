<?php
if (!isset($_GET["id"]) || !preg_match('/^\d+$/', $_GET["id"])) {
    header("Location: ../common/error.php");
}

include_once('../../config/init.php');
include_once("../../database/account.php");
include_once("../../database/email.php");
include_once("../../database/topics.php");

$userid = $_GET["id"];
if (!isset($_SESSION['id']) || $_SESSION['id'] != $userid) {
    header("Location: ../common/error.php");
}

include_once("../common/header.php");

try {
    $user = getAccountByUserId($userid);
} catch(PDOException $e) {
    saveOnLog("editProfile.php:", $e);
    //TODO
}

try {
    $emails = getUserEmailList($userid);
} catch(PDOException $e) {
    saveOnLog("editProfile.php:", $e);
    //TODO
}


$links = json_decode(getUserLinks($userid)[0]['links']);
$smarty->assign('user', $user);
$smarty->assign('emails', $emails);
$smarty->assign('links', $links);
$smarty->display('member/editProfile.tpl');
?>
