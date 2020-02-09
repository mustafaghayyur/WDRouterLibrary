<?php 
error_reporting(E_ALL & ~E_NOTICE);

require __DIR__ . '/vendor/autoload.php';

use Pimple\Container;
use DotzFramework\Core\Router;
use DotzFramework\Core\Configurations;

$container = new Container();

$container['configs'] = function($c){
							return new Configurations(__DIR__ . '/configs');
						};

$container['router'] = function($c){
							return new Router($c['configs']->props);
						};

try{
    
    $container['router']->do();

}catch (Exception $e){

    echo "Exception: ". $e->getMessage().'<br/>';

}



