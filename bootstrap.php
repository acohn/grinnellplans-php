<?php
define('__ROOT__', dirname(__FILE__));
// Composer setup 
require_once(__DIR__.'/vendor/autoload.php');
require_once ('Configuration.php');
set_include_path(get_include_path() . ':' . __ROOT__ . ':' . __ROOT__ . '/inc');
putenv('TZ=' . TZ);
// Doctrine setup
require_once ('lib/doctrine/Doctrine.php');
spl_autoload_register(array('Doctrine', 'autoload'));
$manager = Doctrine_Manager::getInstance();
$manager->setAttribute('model_loading', 'conservative');
$manager->setAttribute('validate', 'lengths');
Doctrine::loadModels(__ROOT__ . '/db/models'); // This call will not require the found .php files
$conn = Doctrine_Manager::connection(DB_URI);
$conn->setCharset('utf8mb4');
$conn->setCollate('utf8mb4_unicode_ci');
// Autoloader for classes
function plans_autoload($classname) {
    $filename = str_replace('_', '/', $classname);
    if (is_readable(__ROOT__ . "/inc/$filename.php")) {
        require_once (__ROOT__ . "/inc/$filename.php");
    }
}
spl_autoload_register('plans_autoload');
