<?php
if (!isset($_POST["id"]) || !preg_match('/^\d+$/', htmlspecialchars(trim($_POST["id"])))) {
    header('HTTP/1.1 500 Internal Server Error');
    header('Content-Type: application/json; charset=UTF-8');
    die(json_encode(array('message' => 'Internal Server Error', 'code' => 500)));
}

include_once('../../config/init.php');

if (!isset($_SESSION["usertype"]) || $_SESSION["usertype"] != "admin") {
    header('HTTP/1.1 403 Forbidden');
    header('Content-Type: application/json; charset=UTF-8');
    die(json_encode(array('message' => 'Forbidden', 'code' => 403)));
}

include_once('../../database/topics.php');

$topicId = htmlspecialchars(trim($_POST["id"]));

try {
    deletePost($topicId);
    header('Location: ../../pages/home/home.php');
} catch (PDOException $e) {
    saveOnLog("Delete Topic:", $e);
    header('Location: ../../pages/common/error.php');
}
?>
