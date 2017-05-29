<?php
include_once('../../config/init.php');
include_once('../../database/topics.php');

$id = htmlspecialchars(trim($_POST['id']));

try {
    updateVisualizations($id);
} catch (PDOException $e) {}

?>