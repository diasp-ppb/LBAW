<?php
    include_once('../../config/init.php');
    include_once('../../database/account.php');
    
    $userImg=getUserImage($_SESSION["id"]);
    $smarty->assign("title", pathinfo(basename($_SERVER['PHP_SELF']), PATHINFO_FILENAME));
    $smarty->assign("image",$userImg);
    $smarty->display("common/header.tpl");
?>
