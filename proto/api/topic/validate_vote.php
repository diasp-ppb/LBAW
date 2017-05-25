<?php
include_once('../../config/init.php');
include_once('../../database/topics.php');

$type = $_POST["voteType"];
$topicId = $_POST["topicId"];

try {
    if (isValidVote($_SESSION['id'], $topicId)) {
        insertNewVote($_SESSION['id'], $type, $topicId);
        echo json_encode(0);
    }
    else {
        echo json_encode(1);
    }
} catch(PDOException $e) {
    print_r($e->getMessage());
}

?>