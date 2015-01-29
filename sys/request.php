<?php
/**
* class Request
*/
class Request{
  static private $query=array();
 
  static function retrieve(){
    $array_query=explode('/',$_SERVER['REQUEST_URI']);

   array_shift($array_query);

//Coder::code_var(APP_W);
//Coder::code(APP);
 
    if ((($array_query[0]==APP_W))||(substr_count(APP_W, $array_query[0])>0)){
array_shift($array_query);
    }
   

    



    if (end($array_query)==""){
        array_pop($array_query);
    }
    self::$query=$array_query;

    Coder::code_var($array_query);
   // Coder::code_var(self::$query);



  }
  static function getCont(){
//si no va el "" empty(self::array[2])
    if (self::$query[2]=="")
    {
      return 'home';
    }
  // Coder::code_var(self::$query[2]);
     return self::$query[2];



  }
  static function getAct(){

        if (self::$query[3]=="")
    {
      return 'home';
    }
   //Coder::code_var(self::$query[3]);

     return self::$query[3];
  }
  static function getParam(){
    if ((count(self::$query))%2==0){
         return self::$query;
    }
    else{
      echo 'ERROR Los numeros tienen que ser pares';
      exit;
    }
 }
 
}