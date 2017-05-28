<?php 


// TODO adiconar á lista
function getTags() {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM tag  
                            ORDER BY RANDOM()
                            LIMIT 10");
    $stmt->execute();
    return $stmt->fetchAll();
}

// TODO ver se ta na DOC
function getTagbyID($tagId) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM tag  
                            WHERE id = ?");
    $stmt->execute(array($tagId));
    return $stmt->fetch();
}
// TODO ver se ta na DOC
function getTagByName($name) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM tag  
                            WHERE name = ?");
    $stmt->execute(array($name));
    return $stmt->fetchAll();
}

function getMostUsedTags() {
    global $conn;
    $stmt = $conn->prepare("SELECT COUNT(tag.id) AS frequency, name, tag.id FROM tag
                                RIGHT JOIN feature on tagid = tag.id
                            GROUP BY tag.id
                            LIMIT 7;");
    $stmt->execute();
    return $stmt->fetchAll();
}



function getUserMostAcceptedTags($userId) {
    global $conn;
    $stmt = $conn->prepare("SELECT COUNT(tag.name) AS frequency, tag.name from tag
                                JOIN feature ON tag.id = feature.tagid
                                JOIN post t2 ON t2.id = feature.postid
                                JOIN post t3 ON t2.id = t3.parentid
                                JOIN vote on t3.id = vote.postid
                            WHERE voteType = 'accept' AND t3.userid = ?
                            GROUP BY tag.name
                            LIMIT 7;");
    $stmt->execute(array($userId));
    return $stmt->fetchAll();
}

function getUserMostCommentsTags($userId) {
    global $conn;
    $stmt = $conn->prepare(" SELECT COUNT(tag.name) AS frequency , tag.name from tag
                                JOIN feature ON tag.id = feature.tagid
                                JOIN post t2 ON t2.id = feature.postid
                                JOIN post t3 ON t2.id = t3.parentid
                                JOIN comment ON t3.id = comment.postid
                             WHERE t3.userid = ?
                             GROUP BY tag.name
                             LIMIT 7;");
    $stmt->execute(array($userId));
    return $stmt->fetchAll();
}

function getTagsFuzzy($query)		
  {		
     global $conn;		
     $stmt = $conn->prepare("SELECT name FROM tag		
                             WHERE name LIKE CONCAT(?,'%')");		
     $stmt->execute(array($query));		
     return $stmt->fetchAll();		
 }
?>