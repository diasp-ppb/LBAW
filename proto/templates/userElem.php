<?php function userElem($username) {

    /*
    if (!defined('BASEPATH'))
         exit('No direct script access allowed');
    */

    $smarty->assign('username', $username);

    $smarty->display('userElem.tpl');
} ?>