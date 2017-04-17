<?php

   
function getAccountByUsername($username) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM account WHERE username = ?;");
    $stmt->execute(array($username));
    return $stmt->fetchAll();
}


// TODO tem de se dar add no site de lbaw
function getAccountByUserId($userId) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM account WHERE id = ?;");
    $stmt->execute(array($userId));
    return $stmt->fetchAll();
}


?>