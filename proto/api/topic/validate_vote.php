<?php
include_once('../../config/init.php');
include_once('../../database/topics.php');

$type = $_POST["voteType"];
$topicId = $_POST["topicId"];

if (isValidVote($_SESSION['id'], $topicId)) {
    if (insertNewVote($_SESSION['id'], $type, $topicId)) {
        echo json_encode(0);
    }
}
else {
    echo json_encode(1);
}

?>