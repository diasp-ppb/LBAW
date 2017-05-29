<?php
if (!isset($_GET["search"])) {
    header("Location: ../common/error.php");
}
if ($_GET["search"] == null) {
	header("Location: ./home.php");
}

include_once("../../config/init.php");
include_once("../common/header.php");
include_once("../../database/topics.php");
include_once("../../database/account.php");
include_once("../../database/tags.php");
include_once("../../api/serverLog/serverLog.php");

try {
     global $smarty;
     $textSearch=htmlspecialchars(trim($_GET["search"]));

     $result = getTopicWithTitle($textSearch);


      foreach($result as &$topic) {
        $features = getFeaturedTagsTopic($topic["id"]);
        $fTags = array();

        foreach($features as $feature) {
        $tag = getTagById($feature["tagid"]);
        array_push($fTags, $tag);
        }

        $topic["tags"] = $fTags;
        $topic["author"] = getAccountByUserId($topic["userid"])["name"] ;
        $topic["class"] = "resultTitle";
      }
       

     $result2 = getTopicWithContent($textSearch);
     
      foreach($result2 as &$topic) {
        $added = false;
        foreach($result as &$finalTopic){
          if($finalTopic["id"] == $topic["id"]){
            $finalTopic["class"] = $finalTopic["class"] . " resultContent";
            $added = true;
          } 
        }
        if($added == false) {
          $features = getFeaturedTagsTopic($topic["id"]);
          $fTags = array();

          foreach($features as $feature) {
            $tag = getTagById($feature["tagid"]);
            array_push($fTags, $tag);
          }

          $topic["tags"] = $fTags;
          $topic["author"] = getAccountByUserId($topic["userid"])["name"];
          $topic["class"] = "resultContent";
          array_push($result, $topic);
        }
      }
     
     $tag = getTagByName($textSearch);

     $result3 = getTopicWithTag($tag[0]["id"]);

      foreach($result3 as &$topic) {

        $added = false;
        foreach($result as &$finalTopic){
          if($finalTopic["id"] == $topic["id"]){
            $finalTopic["class"] = $finalTopic["class"] . " resultTag";
            $added = true;
          } 
        }

        if($added == false){
           $features = getFeaturedTagsTopic($topic["id"]);
        $fTags = array();

        foreach($features as $feature) {
        $tag = getTagById($feature["tagid"]);
        array_push($fTags, $tag);
        }

        $topic["tags"] = $fTags;
        $topic["author"] = getAccountByUserId($topic["userid"])["name"] ;
        $topic["class"] = "resultTag";
        array_push($result,$topic);
        }
      }
      $result4  = getUsersBySearchInput($textSearch);



} catch(PDOException $e) {
    saveOnLog("search.php:", $e);
    //TODO
}      
   $smarty->assign('result',$result);
    $smarty->assign('result2',$result2);
     $smarty->assign('result3',$result3);
   $smarty->assign('users',$result4);
   $smarty->display('home/search.tpl');
?>
