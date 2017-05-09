<?php
    include_once('../../config/init.php');
    include_once('../../database/tags.php');

$query = $_GET["query"];

try{
    $result = getTagsFuzzy($query);
}catch (PDOException $e) {
    //TODO
}
$name = array();
foreach($result as $tag) {
    array_push($name, $tag["name"]);
}

echo json_encode($name);
?>