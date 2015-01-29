<?php

class Coder{
static function code($var){
echo '<pre>'.$var.'</pre>';
}
static function code_var($var){
echo '<pre>'.var_dump($var).'</pre>';
}
}


class KAutoloader{
static function SysLoader($class){
$filename = strtolower($class) . '.php';
$file =ROOT.'sys'.DS.$filename;
if (!file_exists($file))
{
return false;
}
include $file;
}
static function AppContLoader($class){
$filename = strtolower($class) . '.php';
$file =APP.'controllers'.DS.$filename;
if (!file_exists($file))
{
return false;
}
include $file;
}
static function AppModLoader($class){
$filename = strtolower($class) . '.php';
$file =APP.'models'.DS.$filename;
if (!file_exists($file))
{
return false;
}
include $file;
}
static function AppVieLoader($class){
$filename = strtolower($class) . '.php';
$file =APP.'views'.DS.$filename;
if (!file_exists($file))
{
return false;
}
include $file;
}
}