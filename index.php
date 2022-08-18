<?php

require_once __DIR__ . '/vendor/autoload.php';

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

use \app\core\Router;

$router = new Router();