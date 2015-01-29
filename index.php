<?php 

 ini_set('display_errors','on');
 
    define('DS',DIRECTORY_SEPARATOR);
    define('ROOT',realpath(dirname(__FILE__)).DS);
    //to access filesystem
    define('APP',ROOT.'app'.DS);
    define('APP_W',basename($_SERVER['SCRIPT_NAME']));






    
    require 'sys/core.php';
    require "sys/helper.php";
        require "sys/config.php";




    Core::init();