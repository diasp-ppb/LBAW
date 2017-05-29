<?php
include_once('../../config/init.php');
include_once('../../database/topics.php');
include_once('../../api/serverLog/serverLog.php');

$topicId = htmlspecialchars(trim($_POST["topicId"]));

try {
    $type=sizeof(getAcceptVoteByTopic($topicId));
    if($type==1){
        echo json_encode(0);
    }
    else if($type==0){
        echo json_encode(1);
    }
    else{
        echo json_encode(1);
    }
} catch(PDOException $e) {
    saveOnLog("verify_accept: ", $e->getMessage());
}
?>