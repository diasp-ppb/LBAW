<?php
include_once "../templates/header.php";
include_once "../database/topics.php";
include_once "../database/account.php";	
include_once "../database/tags.php";


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
}


$smarty->assign('tags',$tags);
$smarty->assign('featuredTopics',$featuredTopics);
$smarty->assign('HotTopics',$HotTopics);
$smarty->assign('recentTopics',$recentTopics);

$smarty->display('home.tpl');

include "../templates/footer.php"
?>