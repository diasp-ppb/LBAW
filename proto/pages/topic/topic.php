<?php
if (!isset($_GET["id"]) || !preg_match('/^\d+$/', $_GET["id"])) {
    header("Location: ../common/error.php");
}
include_once('../../config/init.php');
include_once("../../lib/Parsedown/Parsedown.php");
include_once("../../database/topics.php");
include_once("../../database/account.php");

$topicId = htmlspecialchars(trim($_GET["id"]));

try{
    $topicInfo = getTopicInfo($topicId)[0];
} catch(PDOException $e) {
    saveOnLog("topic.php:", $e);
    //TODO
}

if (!isset($topicInfo)) {
    header("Location: ../common/error.php");
}

include_once("../common/header.php");

$userTopicId = $topicInfo["userid"];
$ratingTopic = $topicInfo["rating"];
$topicTitle = $topicInfo["title"];
$creationDate = $topicInfo["creationdate"];
$timeDiff = round((time() - strtotime($creationDate))/(60*60*24)) ;

try {
$userImage = getUserImage($userTopicId);
$userName = getNameById($userTopicId);

$answers = getTopicAnswers($topicId);
} catch(PDOException $e) {
    saveOnLog("topic.php:", $e);
    //TODO
}
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
