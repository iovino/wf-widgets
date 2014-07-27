<?php
// Author Ken Iovino twitter.com/keniovino
// (c) Copyright 2014, All Rights Reserved

date_default_timezone_set('America/New_York');

require __DIR__ . '/vendor/autoload.php';

$app = new \Slim\Slim(array('templates.path' => __DIR__ . '/views/', 'mode' => 'iovino'));
$env = $app->environment();

require __DIR__ . '/config/config.php';
require __DIR__ . '/routes/routes.php';

// load libs
require __DIR__ . '/lib/Widget.php';
require __DIR__ . '/lib/Helper.php';

require __DIR__ . '/lib/Channels.php';
require __DIR__ . '/lib/Pollen.php';
require __DIR__ . '/lib/Feed.php';
require __DIR__ . '/lib/ContractorTalk.php';
require __DIR__ . '/lib/PaintTalk.php';
require __DIR__ . '/lib/ElectricianTalk.php';
require __DIR__ . '/lib/DiyChatroom.php';

$app->run();