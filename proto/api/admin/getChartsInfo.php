<?php
    include_once("../../config/init.php");
    include_once('../../database/tags.php');
/*  
    topics-by-tags
    tags nome id contagem
*/

$labels = array();
$frequency = array();

$charInfo = getMostUsedTags();

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

