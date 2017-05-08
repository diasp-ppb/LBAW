<?php 
    function saveOnLog($page, $message) {
        global $BASE_DIR;

        $log = fopen($BASE_DIR .'log.txt' , "w");
        fwrite($log,$page);
        fwrite($log, $message);
        fclose($log);
    }
?>