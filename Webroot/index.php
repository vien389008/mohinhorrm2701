<?php

namespace MVC\Webroot;

use MVC\Dispatcher;

define('WEBROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"]));

require_once realpath("../vendor/autoload.php");

$dispatch = new Dispatcher();
$dispatch->dispatch();
