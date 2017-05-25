<?php
include_once('../../database/topics.php');
include_once('../../config/init.php');
include_once('../../utils.php');

if (!isset($_SESSION['id'])) {
    header("Location: ../../pages/common/error.php");
}

$title = $_POST['title'];
$tags = htmlspecialchars(trim($_POST['tags']));
$text = htmlspecialchars(trim($_POST['wmd-input']));
$tags = explode(",", $tags);

/*
if(sizeof($text) < 20) {
    $errText="Texto tem de ter no mínimo 20 caracteres.";
    header('Location: ../../pages/topic/createTopic.php'); //em vez disto depois é preciso fazer ajax
}
*/

try {
    $topicId = createTopic($_SESSION['id'], $title, $text, 1, $tags);
    header('Location: ../../pages/topic/topic.php?id=' . $topicId);
} catch (PDOException $e) {
    header('Location: ../../pages/topic/createTopic.php'); //em vez disto depois é preciso fazer ajax
}

?>
