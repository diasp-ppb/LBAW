<?php
include_once('../../config/init.php');
include_once('../../database/topics.php');
include_once('../../api/serverLog/serverLog.php');

$type = htmlspecialchars(trim($_POST["voteType"]));
$topicId = htmlspecialchars(trim($_POST["topicId"]));

try {

    if($type=='accept'){
        if(hasAlreadyMade($_SESSION["id"],$topicId,$type)){
            deleteAcceptVoteByTopic($topicId);
            echo json_encode(4);
        } else{
            insertNewVote($_SESSION["id"],$type,$topicId);
            echo json_encode(3);
        }
    } else {
        if($type=="upvote")
            $inverseType="downvote";
        else
            $inverseType="upvote";

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
    }
} catch(PDOException $e) {
    saveOnLog("ola",$e->getMessage());
}

?>