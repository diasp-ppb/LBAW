<?php
include_once("../templates/header.php");
include_once("../lib/Parsedown/Parsedown.php");
include_once("../database/topics.php");
include_once("../database/account.php");

$userTopicId=getUserTopic($_GET["id"]);
$userImage=getUserImage($userTopicId);
$userName=getNameById($userTopicId);

$timeDiff=calculateTimeDiff($_GET["id"]);
$ratingTopic=getRatingTopic($_GET["id"]);
$topicTitle=getTitleTopic($_GET["id"]);
$answers=getTopicAnswers($_GET["id"]);

$smarty->assign('userTopicId',$userTopicId);
$smarty->assign('userImage',$userImage);
$smarty->assign('userName',$userName);
$smarty->assign('timeDiff',$timeDiff);
$smarty->assign('ratingTopic',$ratingTopic);
$smarty->assign('topicTitle',$topicTitle);
$smarty->assign('answers',$answers);
$smarty->assign('topicId',$_GET["id"]);

$smarty->display('topic.tpl');

include_once("../templates/footer.php");
?>
