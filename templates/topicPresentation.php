<?php function topicPresentation($tab, $topic, $author, $votes, $visua, $answers) { 

/*
if (!defined('BASEPATH')) 
     exit('No direct script access allowed');
*/

  require_once('smarty/smarty.php');

  $smarty = new MySmarty;

  $smarty->assign('tab',$tab);
  $smarty->assign('topic',$topic);
  $smarty->assign('author',$author);
  $smarty->assign('votes',$votes);
  $smarty->assign('visua',$visua);
  $smarty->assign('answers',$answers);


  $smarty->display('topicPresentation.tpl');
} ?>