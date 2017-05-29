<?php
include_once('../../database/topics.php');
include_once('../../config/init.php');
include_once('../../utils.php');

if (!isset($_SESSION['id']) || $_SESSION["s_token"]!==$_POST["s_token"]) {
    header("Location: ../../pages/common/error.php");
}

$title = htmlspecialchars(trim($_POST['title']));
$tags = htmlspecialchars(trim($_POST['tags']));
$text = htmlspecialchars(trim($_POST['wmd-input']));
$tags = explode(",", $tags);

try {
    $topicId = createTopic($_SESSION['id'], $title, $text, 1, $tags);
    header('Location: ../../pages/topic/topic.php?id=' . $topicId);
} catch (PDOException $e) {
    header('Location: ../../pages/topic/createTopic.php'); //em vez disto depois é preciso fazer ajax
}

?>
