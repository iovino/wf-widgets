<?php
// Author Ken Iovino - twitter.com/keniovino
// (c) Copyright 2014, All Rights Reserved

// global
$app->config('feed_url'  , 'http://www.womensforum.com/%s/feed/rss.html');
$app->config('app_path'  , dirname(__DIR__));
$app->config('thumb_dir' , '/assets/imgs/thumbnails');
$app->config('thumb_path', $app->config('app_path') . '/public' . $app->config('thumb_dir'));
$app->config('channels', array(
    'holiday-decor',
    'holiday-recipes',
    'holiday-shopping',
    'holiday-fashion',
    'family-traditions',
    'march-mania',
    'tailgating',
    'olympics',
    'red-carpet-showdown',
    'new-year-new-you',
    'the-heart',
    'healthy-year-healthy-you',
    'easter-passover',
    'moms-and-parenting',
    'diy-diaries',
    'mom-talk-with-jodi',
    'social-buzz',
    'fit-fix',
    'trend',
    'kitchen-courses',
    'spring-fashion',
    'inspiring-women'
));

// production configuration
$app->configureMode('production', function () use ($app) {
    $app->config('base_url', 'http://widgets.womensforum.com');
    $app->config('widget_js_url', $app->config('base_url') . '/v2/widget.min.js');
    $app->config('debug', false);
});

// local configuration
$app->configureMode('local', function () use ($app) {
    $app->config('base_url', 'http://widgets');
    $app->config('widget_js_url', $app->config('base_url') . '/v2/widget.min.js');
    $app->config('debug', true);
});

//
// developer specific configuration
//

// Ken Iovino
$app->configureMode('iovino', function () use ($app) {
    $app->config('base_url', 'http://widgets');
    $app->config('widget_js_url', $app->config('base_url') . '/v2/widget.min.js');
    $app->config('debug', true);

});