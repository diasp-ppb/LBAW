<?php
    include_once('../config/init.php');
    $smarty->assign("title", pathinfo(basename($_SERVER['PHP_SELF']), PATHINFO_FILENAME));
    $smarty->display("header.tpl");
?>
