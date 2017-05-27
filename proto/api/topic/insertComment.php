<?php
include_once('../../config/init.php');
include_once('../../database/topics.php');

$values = $_REQUEST['values'];

try {
    createComment($values['postid'], $values['userid'], $values['content']);
    echo json_encode("success");
} catch (PDOException $e) {
    echo json_encode("error");
}
?>