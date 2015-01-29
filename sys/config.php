<?php


class Registry{
    private static $registry = array();
    public static function exists($key){
        return array_key_exists($key, self::$registry);
    }

    static public function add($key, &$objeto){
        if(!self::exists($key)){
            self::$registry[$key] = $objeto;
            $error = true;
        }
        else $error = false;
        return $error;
    }

    static public function get($key){
        if(self::exists($key)){
            return self::$registry[$key];
        }
        else{
            return null;
        }
    }

    static public function remove($key){
        if(self::exists($key)){
            unset(self::$registry[$name]);
            return true;
        }
        else return false;
    }
    static public function clear(){
        self::$registry = array();
    }

}