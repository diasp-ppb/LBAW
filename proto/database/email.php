<?php
function getUserEmailList($userId) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM email WHERE userid = ?");
    $stmt->execute(array($userId));
    $emailList = $stmt->fetchAll();
    return $emailList;
}

function deleteEmail($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM email WHERE id = ?");
    $stmt->execute(array($id));
}
?>
