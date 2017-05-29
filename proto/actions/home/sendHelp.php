<?php
include_once('../../database/topics.php');
include_once('../../config/init.php');
include_once('../../utils.php');

if (!isset($_SESSION['id'])) {
    header("Location: ../../pages/common/error.php");
}

$title = htmlspecialchars(trim($_POST['title']));
$text = htmlspecialchars(trim($_POST['text']));
$email = htmlspecialchars(trim($_POST['email']));

$text = $_SESSION['email'] . "\r\n" . $text;
$text = wordwrap($text, 70, "\r\n");

try {
    mail('up201404178@fe.up.pt', $title, $text);
    header('Location: ../../pages/home/help.php?status=OK');
} catch (PDOException $e) {
    header('Location: ../../pages/topic/help.php?status=MISS');
}

?>