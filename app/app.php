<?php
session_start();

require __DIR__.'/autoload.php';
$environment = require_once(__DIR__ . '/env.php');

require_once(__DIR__ . '/config.php');
$configs = (new Config($environment))->get();
;

define('ENV_URL',$configs['site']['url']);
define("ROOT_URL",$configs['site']['url']);
define("MY_DOMAIN",$configs['site']['domain']);
define('VTRACK_COOKIE','anb_visitor_id');

$DB = new MySQL(
    $configs['db']['host'],
    $configs['db']['username'],
    $configs['db']['password'],
    $configs['db']['database']
);

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller) {
    if($controller->executeAction() === false) {
        //header('Location: '.ENV_URL.'users/login');
    }
}
