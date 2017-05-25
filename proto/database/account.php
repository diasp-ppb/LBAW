<?php
function createAccount($username, $name, $usertype) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO account(username, name, usertype) VALUES (?, ?, ?) RETURNING id;");
    $stmt->execute(array($username, $name, $usertype));
    return $stmt->fetch();
}

function getAccountByUsername($username) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM account WHERE username = ?;");
    $stmt->execute(array($username));
    return $stmt->fetch();
}

// TODO tem de se dar add no site de lbaw
function getAccountByUserId($userId) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM account WHERE id = ?;");
    $stmt->execute(array($userId));
    return $stmt->fetchAll();
}

function getUserList($offset) {
    global $conn;
    $stmt = $conn->prepare("SELECT name, id FROM account ORDER BY name LIMIT 10 OFFSET ?");
    $stmt->execute(array($offset));
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

function updateProfile($userId, $name, $links) {
    global $conn;
    $stmt=$conn->prepare("UPDATE account SET name = ?, links = ? WHERE id = ?;");
    $stmt->execute(array($name, $links, $userId));
    return $stmt->errorCode();
}

function getUserOrderedByName(){
    global $conn;
    $stmt=$conn->prepare("SELECT name, id FROM account ORDER BY name LIMIT 10");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getUsersBySearchInput($input) {
	global $conn;
    $stmt=$conn->prepare("SELECT * FROM account WHERE name = ?");
    $stmt->execute(array($input));
    return $stmt->fetchAll();
}

function updateEmails($userId, $toDelete, $newEmails) {
  global $conn;
  $toDelete = to_pg_array($toDelete);
  $newEmails = to_pg_array($newEmails);

  $stmt = $conn->prepare(
    " BEGIN;
        SET TRANSACTION ISOLATION LEVEL SERIALIZABLE;
        DELETE FROM email WHERE id = ANY (?);
        INSERT INTO email(userid, mail) SELECT ?::int userid, mail FROM unnest(?::text[]) mail;
      COMMIT;
    ");
  $stmt->execute(array($toDelete, $userId, $newEmails));

  return $stmt->errorCode();
}


function countUsers(){
    global $conn;
    $stmt=$conn->prepare("SELECT COUNT(*) FROM account WHERE status = 'active'");
    $stmt->execute();
    return $stmt->fetchAll()[0]['count'];
}

function countRecentlyActiveUsers() {
    global $conn;
    $stmt=$conn->prepare("SELECT COUNT(*) FROM account WHERE lastAccessDate > (NOW() - INTERVAL '2 hour')");
    $stmt->execute();
    return $stmt->fetchAll()[0]['count'];
}
?>
