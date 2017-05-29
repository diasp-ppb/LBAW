<?php
include_once('../../config/init.php');
include_once('../../database/topics.php');
include_once('../../api/serverLog/serverLog.php');

$userId = htmlspecialchars(trim($_POST["userId"]));
$topicId = htmlspecialchars(trim($_POST["topicId"]));

try {
    $type=getTopicVoteType($userId,$topicId)[0]["votetype"];
    if($type=="upvote"){
        echo json_encode(0);
    }
    else if($type=="downvote"){
        echo json_encode(1);
    }
    else{
        echo json_encode(2);
    }
} catch(PDOException $e) {
    saveOnLog("ola", $e->getMessage());
}
?>