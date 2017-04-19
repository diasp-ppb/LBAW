<?php 
  include_once("../database/topics.php");
  include_once("../database/account.php");
  include_once("../database/tags.php");
  
  
  function searchTopicPresent() {
    
    $result = getTopicWithTitle($_GET["search"]);
    searchTopicPresentation($result, "titleResult");
    
    $result = getTopicWithContent($_GET["search"]);
    searchTopicPresentation($result, "contentResult");
    
    $tag = getTagByName($_GET["search"]);

    if(!empty($tag[0])){
    $result = getTopicWithTag($tag[0]["id"]); 
    searchTopicPresentation($result, "tagResult");
    }
  }

  function searchTopicPresentation($result, $type){
  global $smarty;

  if($_GET["search"] == "" ||
     $_GET["search"] == null ||
     empty($_GET["search"]))
     return;

  foreach($result as $topic) {
  

  $topicId = $topic["id"];
  $title = $topic["title"];
  $author= getAccountByUserId($topic["userid"])[0]["name"] ;

  $features = getFeaturedTagsTopic($topicId);
  $tags = array();
  foreach($features as $feature) {
      $tag = getTagbyID($feature["tagid"]);
      array_push($tags, $tag);
    }


  $smarty->assign('title',$title);
  $smarty->assign('author',$author);
  $smarty->assign('tags',$tags);
  $smarty->assign('topicId',$topicId);
  $smarty->assign('type', $type);
  $smarty->display('searchResultTopic.tpl');
  clear_all_assign();
  
  }
  }
?>

