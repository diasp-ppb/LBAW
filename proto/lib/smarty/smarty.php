<?php


require_once('smarty-3.1.30/libs/Smarty.class.php');



class MySmarty extends Smarty
{
  
    /**
     * constructor
     */
    function __construct()
    {
        parent::__construct();        
        $this->template_dir = "../lib/smarty/views";
        $this->config_dir = "../lib/smarty/conf/";
        $this->compile_dir = "../lib/smarty/cache/";
        $this->caching = 0;       
    }
}

?>