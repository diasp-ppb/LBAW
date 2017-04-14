<?php function userElem($username) {

    /*
    if (!defined('BASEPATH'))
         exit('No direct script access allowed');
    */

    require_once('../lib/smarty/smarty.php');

    $smarty = new MySmarty;

    $smarty->assign('username', $username);

    $smarty->display('userElem.tpl');
} ?>