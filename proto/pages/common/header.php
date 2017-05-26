<?php
    include_once('../../config/init.php');
    include_once ('../../database/account.php');
    $imageUser=getUserImage($_SESSION["id"]);
    if(sizeof($imageUser)==0){
        $imageUser="../../resources/images/users/profile_default.png";
    }
    $smarty->assign("title", pathinfo(basename($_SERVER['PHP_SELF']), PATHINFO_FILENAME));
    $smarty->assign("image",$imageUser);
    $smarty->display("common/header.tpl");
?>
