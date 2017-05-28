<?php
include_once('../../config/init.php');
include_once('../../database/topics.php');
include_once('../../database/account.php');
include_once('../../utils.php');

$values = $_REQUEST['values'];

try {
    $answer = createComment($values['postid'], $values['userid'], $values['content']);
    
    $smarty->assign('userId', $values['userid']);
    $smarty->assign('rating', $answer['rating']);
    $smarty->assign('content', $answer['content']);
    $smarty->assign('postid', $answer['id']);
    $smarty->assign('comments', array());
    $smarty->display('topic/commentPresentation.tpl');
} catch (PDOException $e) {
    echo "error";
}
?>