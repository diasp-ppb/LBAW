<?php function topicPresentation($topicData) { 
  
  global $smarty;
/*
if (!defined('BASEPATH')) 
     exit('No direct script access allowed');
*/
  include_once("../database/account.php");
  require_once('../lib/smarty/smarty.php');


  $topic = $topicData["title"];
  $author= getAccountByUserId($topicData["userid"])[0]["name"];
  $votes = $topicData["rating"];
  $topicId = $topicData["id"];
  $visua = 10; //TODO
  $answers = 10; //TODO
  $features = getFeaturedTagsTopic($topicId);

  
  $tags = array();
  foreach($features as $feature) {
    $tag = getTagbyID($feature["tagid"]);
    array_push($tags, $tag);
  }  
  
  
  $smarty->assign('topic',$topic);
  $smarty->assign('author',$author);
  $smarty->assign('votes',$votes);
  $smarty->assign('visua',$visua);
  $smarty->assign('answers',$answers);
  $smarty->assign('tags',$tags);
  $smarty->assign('topicId',$topicId);

  $smarty->display('topicPresentation.tpl');
  clear_all_assign();
} 
?>
