<?php
include_once('../../config/init.php');
include_once('../../database/topics.php');
include_once('../../database/account.php');
include_once('../../utils.php');

$values = $_REQUEST['values'];

try {
    $answer = updatePostContent($values['postid'], $values['content']);
    echo json_encode("accept");
} catch (PDOException $e) {
    echo json_encode($e->getMessage());
}
?>