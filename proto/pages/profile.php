<?php
include_once("../database/account.php");
include_once("../database/email.php");
include_once("../database/topics.php");
include_once("../templates/header.php");

$userid = $_GET["id"];
$user = getAccountByUserId($userid)[0];
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
