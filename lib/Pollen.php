<?php

use Slim\Slim;

class Pollen {

    /**
     * The main application object
     *
     * @var
     */
    private $app;

    /**
     * Constructor
     *
     * @param Slim $app
     */
    public function __construct(Slim $app) {
        $this->app = $app;
    }

    public function fetch_map() {
        $contents  = file_get_contents('http://www.pollen.com/images/usa_map.gif');
        $file_path = sprintf("%s/public/assets/imgs/spring-fling/pollen-maps/today.gif", $this->app->config('app_path'));

        return file_put_contents($file_path, $contents);
    }
}