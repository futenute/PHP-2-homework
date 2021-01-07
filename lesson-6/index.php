<?php
session_start();
include_once "DB.php";
spl_autoload_register(function ($classname){
    if(is_file("controllers/$classname.php")){
        include_once "controllers/$classname.php";
    } else {
        include_once "models/$classname.php";
    }
});
//include_once "models/UserM.php";

//site.ru/index.php?act=auth&c=User

$action = 'action_';
$action .=(isset($_GET['act'])) ? $_GET['act'] : 'auth';

switch ($_GET['c'])
{
    case 'goods':
        $controller = new GoodsC();
        break;
    case 'cart':
        $controller = new CartC();
        break;
    case 'user':
        $controller = new UserC();
        break;
    default:
        $controller = new UserC();
}

$controller->Request($action);