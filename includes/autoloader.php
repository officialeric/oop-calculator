<?php

spl_autoload_register('myAutoloader');

function myAutoloader($classname){
   $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

   if(strpos($url,'includes')){
    $path = '../classes/';
   }else{
    $path = 'classes/';
   }

    $ext = '.class.php';
    $fullpath = $path . $classname . $ext;

    if(!file_exists($fullpath)){
        return false;
    }

    include_once($fullpath);
}