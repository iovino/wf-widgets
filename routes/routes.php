<?php
// Author Ken Iovino - twitter.com/keniovino
// (c) Copyright 2014, All Rights Reserved

/**
 * Homepage
 */
$app->get('/', function () use ($app) {
    $app->render('homepage/index.php', array('app' => $app));
});

/**
 * List of examples
 */
$app->get('/examples', function () use ($app) {
    $helper = new WF\Helper($app);
    $files  = scandir(sprintf('%s/views/examples', $app->config('app_path')));

    if (is_array($files)) {
        foreach ($files as $file) {
            if ($file == 'index.php')
                continue;

            if ($helper->isFileExtension($file, "php")) {
                $examples[$file] = $helper->slugToTitle(str_replace(".php", "", $file));
            }
        }
    }

    $app->render('examples/index.php', array('examples' => $examples));
});

/**
 * Single example view
 */
$app->get('/examples/:page', function ($page) use ($app) {
    $app->render("examples/$page");
});

/**
 * The latest JS file
 */
$app->get('/v2/widget.min.js', function () use ($app) {
    $app->contentType('application/javascript');
    $app->render('widgets_js/v2.php', array('app' => $app));
});

/**
 * The route that renders the iframe's HTML
 */
$app->get('/widgets/:hash', function ($hash) use ($app) {
    $widget         = new WF\Widget($app, $hash);
    $widget->helper = new WF\Helper($app);

    if ($widget->isValidWidget()) {
        echo $widget->getHtml();
    }
});

/**
 * The channels cron that get ran every 15 mins
 */
$app->get('/crons/channel_cache', function () use ($app) {
    $channels = new Channels($app);
    $channels->cache_channels();
});

/**
 * The pollens map cron that get ran once a data
 */
$app->get('/crons/pollen-data', function () use ($app) {
    $cron = new Pollen($app);
    $cron->fetch_map();
});

