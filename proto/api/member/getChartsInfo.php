<?php
    include_once("../../config/init.php");
    include_once('../../database/tags.php');

$labels = array();
$frequency = array();
$userId = intval($_POST['id']);

try {
    $charInfo = getUserMostAcceptedTags($userId);
} catch(PDOException $e) {
    saveOnLog("getCharsInfo Member:", $e);
    //TODO
}
foreach ($charInfo as $result){
    array_push($labels,$result['name']);
    array_push($frequency,$result['frequency']);
}

$labelsComment = array();
$frequencyComment = array();

try{
    $chartcommentsInfo = getUserMostCommentsTags($userId); 
} catch(PDOException $e) {
    saveOnLog("getCharsInfo member:", $e);
}

foreach ($chartcommentsInfo as $result){
    array_push($labelsComment,$result['name']);
    array_push($frequencyComment,$result['frequency']);
}



$chartResult = array(
        $labels,
        $frequency,
        $labelsComment,
        $frequencyComment
    );

echo json_encode($chartResult);
?>

