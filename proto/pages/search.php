<?php

include_once "../pages/header.php";
include_once "../config/init.php";
include_once "../database/topics.php";
include_once "../database/account.php";
include_once "../database/tags.php";

     global $smarty;

     $result = getTopicWithTitle($_GET["search"]);


      foreach($result as &$topic) {


        $features = getFeaturedTagsTopic($topic["id"]);
        $fTags = array();

        foreach($features as $feature) {
        $tag = getTagById($feature["tagid"]);
        array_push($fTags, $tag);
        }

        $topic["tags"] = $fTags;
        $topic["author"] = getAccountByUserId($topic["userid"])[0]["name"] ;
      }



     $result2 = getTopicWithContent($_GET["search"]);

      foreach($result2 as &$topic) {


        $features = getFeaturedTagsTopic($topic["id"]);
        $fTags = array();

        foreach($features as $feature) {
        $tag = getTagById($feature["tagid"]);
        array_push($fTags, $tag);
        }

        $topic["tags"] = $fTags;
        $topic["author"] = getAccountByUserId($topic["userid"])[0]["name"] ;
      }

     $tag = getTagByName($_GET["search"]);

     $result3 = getTopicWithTag($tag[0]["id"]);



      foreach($result3 as &$topic) {


        $features = getFeaturedTagsTopic($topic["id"]);
        $fTags = array();

        foreach($features as $feature) {
        $tag = getTagById($feature["tagid"]);
        array_push($fTags, $tag);
        }

        $topic["tags"] = $fTags;
        $topic["author"] = getAccountByUserId($topic["userid"])[0]["name"] ;
      }

   $smarty->assign('result',$result);
   $smarty->assign('result2',$result2);
   $smarty->assign('result3',$result3);
   $smarty->display('search.tpl');


include "../templates/footer.php"
?>
