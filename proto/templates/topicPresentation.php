<?php function topicPresentation($topicData) { 

/*
if (!defined('BASEPATH')) 
     exit('No direct script access allowed');
*/
  include_once("../database/account.php");
  require_once('../lib/smarty/smarty.php');


  $smarty = new MySmarty; // TODO NEED TO MOVE TO GLOBAL


  $topic = $topicData["title"];
  $author= getAccountByUserId($topicData["userid"])[0]["name"];
  $votes = $topicData["rating"];
  $visua = 10; //TODO
  $answers = 10; //TODO
  $tag = array("A","B","C"); //TODO TAGS

  $smarty->assign('topic',$topic);
  $smarty->assign('author',$author);
  $smarty->assign('votes',$votes);
  $smarty->assign('visua',$visua);
  $smarty->assign('answers',$answers);
  $smarty->assign('tags',$tags);

  $smarty->display('topicPresentation.tpl');
} ?>