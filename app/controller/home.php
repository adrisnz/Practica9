<?php  
require 'app/controller/controller.php';
require 'sys/config.php';

class Home extends Controller{
function __construct($params){


	parent::__construct($params);
	$this->conf=Registry::getInstance();

	$this->model=new mHome;
		$this->view=new vHome;

}

function home()
{

echo 'Esto es el home';



}


}
 
