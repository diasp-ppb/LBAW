<?php
include_once('../config/init.php');
include_once('../templates/header.php');

/*if (!isset($_SESSION["username"])) {
  header('Location: ./home.php');
} else {
  $smarty->display('../lib/smarty/views/createTopic.tpl');
}*/

$smarty->display('../lib/smarty/views/createTopic.tpl');

include_once('../templates/footer.php');
?>