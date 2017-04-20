<?php
include_once('../database/topics.php');

$type=$_POST["voteType"];
$topicId=$_POST["topicId"];

if(isValidVote($topicId)){
    if(insertNewVote($type,$topicId)){
        echo json_encode(0);
    }
}
else{
    echo json_encode(1);
}

?>