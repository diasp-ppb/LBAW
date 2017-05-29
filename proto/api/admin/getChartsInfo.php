<?php
    include_once("../../config/init.php");
    include_once('../../database/tags.php');
    include_once("../serverLog/serverLog.php");
/*  
    topics-by-tags
    tags nome id contagem
*/

$labels = array();
$frequency = array();

try {
    $charInfo = getMostUsedTags();
} catch(PDOException $e) {
    saveOnLog("getCharsInfo Admin:", $e);
    //TODO redirect
}
foreach ($charInfo as $result){
    array_push($labels,$result['name']);
    array_push($frequency,$result['frequency']);
}



$chartResult = array(
        $labels,
        $frequency
    );

echo json_encode($chartResult);
?>

