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

try {
    deleteComment($id);
    die(json_encode(array('message' => 'OK', 'code' => 200)));
} catch (PDOException $e) {
    saveOnLog("Delete Comment:", $e);
    die(json_encode(array('message' => 'Internal Server Error', 'code' => 500)));
}
?>
