<?php
if (!isset($_GET["id"]) || !preg_match('/^\d+$/', $_GET["id"])) {
    header("Location: ../common/error.php");
}
include_once('../../config/init.php');
include_once("../common/header.php");
include_once("../../lib/Parsedown/Parsedown.php");
include_once("../../database/topics.php");
include_once("../../database/account.php");

$topicId=htmlspecialchars(trim($_GET["id"]));

$userTopicId=getUserTopic($topicId);
$userImage=getUserImage($userTopicId);
$userName=getNameById($userTopicId);

$timeDiff=calculateTimeDiff($topicId);
$ratingTopic=getRatingTopic($topicId);
$topicTitle=getTitleTopic($topicId);
$answers=getTopicAnswers($topicId);

$smarty->assign('userTopicId',$userTopicId);
$smarty->assign('userImage',$userImage);
$smarty->assign('userName',$userName);
$smarty->assign('timeDiff',$timeDiff);
$smarty->assign('ratingTopic',$ratingTopic);
$smarty->assign('topicTitle',$topicTitle);
$smarty->assign('answers',$answers);
$smarty->assign('topicId',$topicId);

$smarty->display('topic/topic.tpl');
?>
