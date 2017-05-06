<?php
    include_once("../../config/init.php");
    include_once('../../database/tags.php');
/*  
SELECT COUNT(tag.name) AS frequency , tag.name from tag
   JOIN feature ON tag.id = feature.tagid
   JOIN post t2 ON t2.id = feature.postid
   JOIN post t3 ON t2.id = t3.parentid
   JOIN vote on t3.id = vote.postid
   WHERE voteType = 'accept' AND t3.userid = ?
   GROUP BY tag.name;
*/

$labels = array();
$frequency = array();

$charInfo = getUserMostAcceptedTags(4);//TODO FIX

foreach ($charInfo as $result){
    array_push($labels,$result['name']);
    array_push($frequency,$result['frequency']);
}

$labelsComment = array();
$frequencyComment = array();
/*
  
   SELECT COUNT(tag.name) AS frequency , tag.name from tag
   JOIN feature ON tag.id = feature.tagid
   JOIN post t2 ON t2.id = feature.postid
   JOIN post t3 ON t2.id = t3.parentid
   JOIN comment ON t3.id = comment.postid
   WHEREt3.userid = ?
   GROUP BY tag.name;

*/


$chartcommentsInfo = getUserMostCommentsTags(4);

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

