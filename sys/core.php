<?php 
require 'sys/request.php';
//require 'app/controller/error.php';

class Core{

static private $controller;
static private $action;
static private $params=array();
static function init()
{


Request::retrieve();
self::$params=Request::getParam();
self::router();

}


static function router(){
        request::retrieve();
        $route=request::getCont();
        $action=request::getAct();


           if(self::$controller!="")

           	{self::$controller='home';
          }

           if(self::$action!=""){self::$action='home';}
            
Coder::code($route);
//Coder::code($action);


            $fileroute=strtolower($route).'.php';
         Coder::code($fileroute);


            if(is_readable(APP.'controller'.DS.$fileroute)){

require APP.'controller'.DS.$fileroute;
  self::$controller=new $route(self::$params);


  call_user_func(array(self::$controller, $action));

            }else{
                //self::$controller=new Error;
                
            }

}
}

 ?>