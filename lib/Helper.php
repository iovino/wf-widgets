<?php
// Author Ken Iovino - twitter.com/keniovino
// (c) Copyright 2014, All Rights Reserved

namespace WF;

class Helper  {
    /**
     * The main application object
     *
     * @var
     */
    var $app;

    /**
     * Constructor
     *
     * @param $app
     */
    public function __construct($app) {
        $this->app = $app;
    }

    /**
     * Returns the linked CSS file
     *
     * @param $file
     * @return string
     */
    public function renderCss($file) {
        $url = sprintf('%s/assets/css/%s.css?cb=%s', $this->app->config('base_url'), $file, time());
        return "<link rel=\"stylesheet\" href=\"" . $url ."\" media=\"all\" />\n";
    }

    /**
     * Returns the channels content from the cached file localed in /views/channels
     *
     * @param $channel
     * @return bool|string
     */
    public function fetchChannel($channel) {
        $file = sprintf('%s/views/channels/%s', $this->app->config('app_path'), $channel);
        if (file_exists($file)) {
            return file_get_contents($file);
        }

        return false;
    }

    /**
     * Checks if the given fileName is the given extension
     *
     * @param $fileName
     * @param $extension
     * @return bool
     */
    public function isFileExtension($fileName, $extension) {
        return in_array(pathinfo($fileName, PATHINFO_EXTENSION), array($extension));
    }

    public function slugToTitle($slug) {
        return ucwords(trim(preg_replace('/-/', ' ', $slug)));
    }


}