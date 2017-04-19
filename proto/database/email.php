<?php
function getUserEmailList($userId) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM email WHERE userid = ?;");
    $stmt->execute(array($userId));
    $emailList = $stmt->fetchAll();
    return $emailList;
}

function deleteEmail($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM email WHERE id = ?;");
    $stmt->execute(array($id));
}

function addEmail($userid, $email) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO email (mail, userid) VALUES (?, ?);");
    $stmt->execute(array($email, $userid));
}
?>
