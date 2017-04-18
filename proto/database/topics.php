<?php

function getHotTopics() {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM post 
                            WHERE post.posttype = 'question' 
                            ORDER BY post.rating 
                            DESC LIMIT 10;");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getMostRecentTopics() {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM post 
                            WHERE post.posttype = 'question' 
                            ORDER BY post.creationdate 
                            DESC LIMIT 10; ");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getFeaturedTopics() {
    //TODO CRIAR UMA VIEW?!? 
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM post post1
                                JOIN (SELECT post2_1.parentid, COUNT(*) AS COUNT 
                                FROM post post2_1 WHERE post2_1.posttype = 'answer' 
                                GROUP BY post2_1.parentid) post2 ON post1.id = post2.parentid
                            WHERE post1.posttype = 'question' 
                            ORDER BY post1.rating/post2.count DESC;");
    $stmt->execute();
    return $stmt->fetchAll();    
}

function getTopicContent($topicId) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM post 
                            WHERE post.id = ? OR post.parentid = ?;");
    $stmt->execute(array($topicId, $topicId));
    return $stmt->fetchAll();    
}

function createTopic($title, $content, $sectionId) { 
    global $conn;
    global $userId;
    $stmt = $conn->prepare("INSERT INTO post (userid, postType, parentid, title, content, creationDate, closedDate, rating ,sectionid) 
                            VALUES (?, 'question', NULL,?,?,DEFAULT,NULL,0,?);");
    $stmt->execute(array($userId, $title, $content, $sectionId));
    return $stmt->fetchAll(); 
}


//TODO VER SE TA na DOC
function getFeaturedTagsTopic($topicId) {
    global $conn;
    
    $stmt = $conn->prepare("SELECT * FROM feature
                            WHERE postid = ?");
    $stmt->execute(array($topicId));
    return $stmt->fetchAll(); 
}
?>