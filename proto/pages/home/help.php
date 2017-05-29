<?php
    include_once('../../config/init.php'); 
    include_once("../common/header.php");
    $smarty->assign('status',$_GET['status']);
    $smarty->display('home/help.tpl');
?>