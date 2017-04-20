<?php
if (!isset($_GET["id"]) || !preg_match('/^\d+$/', $_GET["id"])) {
    header("Location: ../pages/error.php");
}

include_once('../config/init.php');
include_once("../database/account.php");
include_once("../database/email.php");
include_once("../database/topics.php");

$userid = $_GET["id"];
$user = getAccountByUserId($userid)[0];

if (!isset($user)) {
    header("Location: ../pages/error.php");
}

include_once("../templates/header.php");

$emails = getUserEmailList($userid);
$links = json_decode(getUserLinks($userid)[0]['links']);
$topics = getTopicsByUser($userid);

$smarty->assign('user', $user);
$smarty->assign('emails', $emails);
$smarty->assign('links', $links);
$smarty->assign('topics', $topics);
$smarty->display('profile.tpl');

include_once("../templates/footer.php");
?>
