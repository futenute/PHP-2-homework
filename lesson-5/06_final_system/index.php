<?php
session_start();
include_once "config.php";
include_once "m/M_User.php";
spl_autoload_register(function ($classname){
    include_once "c/$classname.php";
});


//site.ru/index.php?act=auth&c=User

$action = 'action_';
$action .=(isset($_GET['act'])) ? $_GET['act'] : 'index';

switch ($_GET['c'])
{
    case 'articles':
        $controller = new C_Page();
        break;
    case 'user':
        $controller = new C_User();
        break;
    default:
        $controller = new C_Page();
}

$controller->Request($action);