<?php 
    function saveOnLog($message) {
        global $BASE_DIR;

        $log = fopen($BASE_DIR .'log.txt' , "w");
        fwrite($log, $message);
        fclose($log);
    }
?>