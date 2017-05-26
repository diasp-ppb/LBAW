<?php
include_once('../../config/init.php');
include_once('../../database/topics.php');

$id = $_POST['id'];

try {
    updateVisualizations($id);
} catch (PDOException $e) {}

?>