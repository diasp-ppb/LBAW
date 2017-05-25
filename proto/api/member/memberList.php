<?php
if (!isset($_GET["page"]) || !preg_match('/^\d+$/', $_GET["page"])) {
    header('HTTP/1.1 500 Internal Server Error');
    header('Content-Type: application/json; charset=UTF-8');
    die(json_encode(array('message' => 'Internal Server Error', 'code' => 500)));
}

include_once('../../config/init.php');
include_once("../../database/account.php");

$value = htmlspecialchars(trim($_GET["page"]));
$offset = ($value * 10);

$list = getUserList($offset);

echo json_encode($list);
?>
