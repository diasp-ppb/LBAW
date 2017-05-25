<?php
/*if (!isset($_SESSION["username"])) { TODO comentado pois ainda não temos sessão
  header('Location: ./home.php');
} else {
  $smarty->display('../lib/smarty/views/createTopic.tpl');
}*/
include_once('../../config/init.php');

if (!isset($_SESSION['id'])) {
    header("Location: ../../pages/common/error.php");
}

include_once('../common/header.php');
$smarty->display('topic/createTopic.tpl');

?>
