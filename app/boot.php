<?php
define('DRAFT_CONTROLLERS', __DIR__ . '/controllers');
define('DRAFT_VIEWS', __DIR__ . '/views');
define('DRAFT_CONFIGS', __DIR__ . '/../config');
define('DRAFT_STORAGE', __DIR__ . '/storage');

define('APP_FOLDER', __DIR__);
define('DATA_FOLDER', realpath(__DIR__.'/../data'));
define('PHP_VENDOR_FOLDER', realpath(__DIR__.'/../vendor'));

require(PHP_VENDOR_FOLDER.'/autoload.php');

use \DraftMVC\DraftConfig as Config;
use \DraftMVC\DraftRouter as Router;

Config::load("db.json");
Config::load("routes.json");
Config::load("general.json");


\DraftMVC\DraftModel::useDB(new \App\Library\DB());

Router::route(
    Config::get('routes')
);
