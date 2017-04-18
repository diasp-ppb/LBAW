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
    return $stmt->fetchAll();
}
?>