<?php
require __DIR__ . '/../bootstrap/autoload.php';

$appConfig = require __DIR__ . '/../config/app.php';
$dbConfig = require __DIR__ . '/../config/databases.php';
$loggerConfig = require __DIR__ . '/../config/logger.php';

$config = ['settings' => array_merge($appConfig, $dbConfig, $loggerConfig)];

$app = require_once __DIR__ . '/../bootstrap/app.php';

require __DIR__ . '/../routers/web.php';
require __DIR__ . '/../routers/api.php';

$app->run();