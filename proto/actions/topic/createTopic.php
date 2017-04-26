<?php
include_once('../../database/topics.php');
include_once('../../config/init.php');
include_once('../../utils.php');
//session_start();

$title=$_POST['title'];
$tags=htmlspecialchars(trim($_POST['tags']));
$text=htmlspecialchars(trim($_POST['wmd-input']));
$tags=explode(",",$tags);
var_dump($tags);
if(sizeof($text)<20){
    $errText="Texto tem de ter no mínimo 20 caracteres.";
    header('Location: ../../pages/topic/createTopic.php'); //em vez disto depois é preciso fazer ajax
}

if(createTopic($title,$text,1,$tags)){
    $topicId=getTopicWithTitle($title);
	header('Location: ../../pages/topic/topic.php?id='.$topicId[0]["id"].'');
}else{
    header('Location: ../../pages/topic/createTopic.php'); //em vez disto depois é preciso fazer ajax
}

?>
