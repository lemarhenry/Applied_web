<?php 
session_start();

$GLOBALS['config'] = array(
    'mysql' => array(
    //this is the same as localhost ... the specificaton is just for website speed
        'host' =>'127.0.0.1',
        'username'=> 'root',
        'password'=> '',
        'db'=> 'Applied_web'
    ),
    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expiry' =>949034//google a week in seconds

    ),
    'session' => array(
        'session_name'=>'user'

    )
    );
    spl_autoload_register(function($class){

        require_once '../classes/' . $class . 'php';

    });
     require_once '../functions/Sanitize.php';