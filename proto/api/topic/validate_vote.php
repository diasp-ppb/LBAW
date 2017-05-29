<?php
include_once('../../config/init.php');
include_once('../../database/topics.php');
include_once('../../api/serverLog/serverLog.php');

$type = htmlspecialchars(trim($_POST["voteType"]));
$topicId = htmlspecialchars(trim($_POST["topicId"]));

if($type=="upvote")
    $inverseType="downvote";
else
    $inverseType="upvote";

try {
    if (hasAlreadyMade($_SESSION["id"], $topicId, $type)) {
        deleteVote($_SESSION['id'],$topicId);
        echo json_encode(0);
    } else if(hasAlreadyMade($_SESSION['id'],$topicId,$inverseType)){
        deleteVote($_SESSION['id'],$topicId);
        insertNewVote($_SESSION['id'], $type, $topicId);
        echo json_encode(1);
    }
    else {
        insertNewVote($_SESSION['id'], $type, $topicId);
        echo json_encode(2);
    }
} catch(PDOException $e) {
    saveOnLog("ola",$e->getMessage());
}

?>