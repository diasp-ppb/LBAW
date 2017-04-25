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

function getUserLinks($userId) {
    global $conn;
    $stmt = $conn->prepare("SELECT array_to_json(links) AS links FROM ACCOUNT WHERE id=?;");
    $stmt->execute(array($userId));
    return $stmt->fetchAll();
}

function getSessionId(){
    global $conn;
    global $userId;
    $stmt = $conn->prepare("SELECT name FROM account WHERE id = ?");
    $stmt->execute(array($userId));
    $name= $stmt->fetch()["name"];
    return $name;
}

function getNameById($userId){
    global $conn;
    $stmt = $conn->prepare("SELECT name FROM account WHERE id = ?");
    $stmt->execute(array($userId));
    $name= $stmt->fetch()["name"];
    return $name;
}

function getSessionImage(){
    global $conn;
    global $userId;
    $stmt=$conn->prepare("SELECT image FROM account WHERE id= ?");
    $stmt->execute(array($userId));
    $image=$stmt->fetch()["image"];
    return $image;
}

function getUserImage($userId){
    global $conn;
    $stmt=$conn->prepare("SELECT image FROM account WHERE id= ?");
    $stmt->execute(array($userId));
    $image=$stmt->fetch()["image"];
    return $image;
}

function to_pg_array($array) {
    $result = array();
    foreach ($array as $link) {
        array_push($result, $link);
    }
    return '{' . join(",", $result) . '}';
}

function updateProfile($userId, $name, $links) {
    global $conn;
    $stmt=$conn->prepare("UPDATE account SET name = ?, links = ? WHERE id = ?;");
    $stmt->execute(array($name, $links, $userId));
    return $stmt->errorCode();
}

function getUserOrderedByName(){
    global $conn;
    $stmt=$conn->prepare("SELECT name FROM account ORDER BY name LIMIT 10");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getUsersBySearchInput($input) {
	global $conn;
    $stmt=$conn->prepare("SELECT * FROM account WHERE name = ?");
    $stmt->execute(array($input));
    return $stmt->fetchAll();
}
?>
