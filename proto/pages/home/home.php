<?php
include_once('../../config/init.php');
include_once("../common/header.php");
include_once("../../database/topics.php");
include_once("../../database/account.php");
include_once("../../database/tags.php");

try {
    $tags = getTags();
    $featuredTopics = getFeaturedTopics();
    $HotTopics = getHotTopics();
    $recentTopics = getMostRecentTopics();


    foreach($featuredTopics as &$topic) {
    $features = getFeaturedTagsTopic($topic["id"]);
    $fTags = array();

    foreach($features as $feature) {
            $tag = getTagById($feature["tagid"]);
            array_push($fTags, $tag);
        }

        $topic["tags"] = $fTags;
        $topic["author"] = getAccountByUserId($topic["userid"])[0]["name"];
        $topic["answers"]= countTopicAnswers($topic["id"])["count"];
    }


    foreach($HotTopics as &$topic) {
        $features = getFeaturedTagsTopic($topic["id"]);
        $fTags = array();

        foreach($features as $feature) {
            $tag = getTagById($feature["tagid"]);
            array_push($fTags, $tag);
        }

        $topic["tags"] = $fTags;
        $topic["author"] = getAccountByUserId($topic["userid"])[0]["name"];
        $topic["answers"]= countTopicAnswers($topic["id"])["count"];
    }

    foreach($recentTopics as &$topic) {
        $features = getFeaturedTagsTopic($topic["id"]);
        $fTags = array();

        foreach($features as $feature) {
            $tag = getTagById($feature["tagid"]);
            array_push($fTags, $tag);
        }

        $topic["tags"] = $fTags;
        $topic["author"] = getAccountByUserId($topic["userid"])[0]["name"];
        $topic["answers"]= countTopicAnswers($topic["id"])["count"];
    }

} catch(PDOException $e) {
    saveOnLog("home.php:", $e);
    //TODO
}

$smarty->assign('tags',$tags);
$smarty->assign('featuredTopics',$featuredTopics);
$smarty->assign('HotTopics',$HotTopics);
$smarty->assign('recentTopics',$recentTopics);

$smarty->display('home/home.tpl');
?>
