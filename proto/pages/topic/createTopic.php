<?php
include_once('../../config/init.php');

if (!isset($_SESSION['id'])) {
    header("Location: ../../pages/common/error.php");
}

include_once('../common/header.php');
$smarty->display('topic/createTopic.tpl');

?>
