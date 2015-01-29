
<?php
require 'sys/load.php';
class Controller
{
protected $model;
protected $view;
protected $params;
protected $conf;
function __construct($params)
{

    //$this->conf=Registry::get();
    $this->$params=$params;

    $load=new Load();


}

function prueba2()
{
    echo "soy el controller.php prueba2";

}

}            
            
        