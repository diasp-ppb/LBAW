<?php
include_once("./header.php");

if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
}
else {
    $msg = "Ocorreu um erro!";
}

$smarty->assign('msg', $msg);
$smarty->display('common/error.tpl');
?>
