<?php
if (!isset($_GET["id"]) || !preg_match('/^\d+$/', $_GET["id"])) {
    header("Location: ../common/error.php");
}
include_once('../../config/init.php');
include_once("../../database/topics.php");
include_once("../../database/account.php");
include_once("../../database/tags.php");
include_once("../../utils.php");


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

try {
    $userImage = getUserImage($topicInfo["userid"]);
    $userName = getNameById($topicInfo["userid"]);
    $answers = getTopicAnswers($topicId);
    $comments = getAllTopicComments($topicId);
} catch(PDOException $e) {
    saveOnLog("topic.php:", $e);
    //TODO
}

$topicInfo['timeDiff'] = getTimeDiff($topicInfo["creationdate"]);

$features = getFeaturedTagsTopic($topicId);
$fTags = array();
foreach($features as $feature) {
    $tag = getTagById($feature["tagid"]);
    array_push($fTags, $tag);
}

$smarty->assign('tags',$fTags);
$smarty->assign('topicInfo', $topicInfo);
$smarty->assign('userImage', $userImage);
$smarty->assign('userName', $userName);
$smarty->assign('answers', $answers);
$smarty->assign('comments', $comments);


$smarty->display('topic/topic.tpl');
?>
