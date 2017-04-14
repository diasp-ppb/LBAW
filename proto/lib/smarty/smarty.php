<?php


require_once('smarty/smarty-3.1.30/libs/Smarty.class.php');



class MySmarty extends Smarty
{
  
    /**
     * constructor
     */
    function __construct()
    {
        parent::__construct();        
        $this->template_dir = "smarty/views/";
        $this->config_dir = "smarty/conf/";
        $this->compile_dir = "smarty/cache/";
        $this->caching = 0;       
    }
}

?>