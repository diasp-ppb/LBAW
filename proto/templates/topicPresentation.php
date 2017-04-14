<?php function topicPresentation($topic, $author, $votes, $visua, $answers,$tags) { 

/*
if (!defined('BASEPATH')) 
     exit('No direct script access allowed');
*/

  require_once('../lib/smarty/smarty.php');

  $smarty = new MySmarty;


  $smarty->assign('topic',$topic);
  $smarty->assign('author',$author);
  $smarty->assign('votes',$votes);
  $smarty->assign('visua',$visua);
  $smarty->assign('answers',$answers);
  $smarty->assign('tags',$tags);

  $smarty->display('topicPresentation.tpl');
} ?>