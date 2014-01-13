<?php
// Author Ken Iovino - twitter.com/keniovino
// (c) Copyright 2014, All Rights Reserved

namespace WF;

use Slim\Slim;

class Widget {
    /**
     * @var array
     */
    var $widgets = array();

    /**
     * @var
     */
    var $widget_hash;

    /**
     * @var WF\Helper
     */
    var $helper;

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
     * @param $widget_hash
     */
    public function __construct(Slim $app, $widget_hash)
    {
        $this->app          = $app;
        $this->widget_hash  = $widget_hash;

        $this->loadIniFiles($app->config('app_path') . '/config/widgets');
    }

    /**
     * Returns the widget's ID
     *
     * @return mixed
     */
    public function getWidgetHash()
    {
        return $this->widget_hash;
    }

    /**
     * Returns the selected widget's HTML code by running the widget's view file through php's
     * eval function and capturing rge output.
     *
     * @return string
     */
    public function getHtml() {
        $widget = $this->widgets[$this->widget_hash];
        $source = file_get_contents($this->app->config('app_path') . $widget['view']);

        @ob_start();
        eval('?>' . $source);
        $html = @ob_get_contents();
        @ob_end_clean();

        return $html;
    }

    /**
     * Returns true if the requested widget id is valid
     *
     * @return bool
     */
    public function isValidWidget() {
        return $this->widgets[$this->widget_hash] ? true : false;
    }

    /**
     * Loads all the widgets config files
     *
     * @param $path - The path where the widgets config files are stored
     */
    private function loadIniFiles($path) {
        foreach(scandir($path) as $file) {
            if ($this->isValidIniFile($file) && file_exists($path . '/' . $file)) {
                $widgets = parse_ini_file($path . '/' . $file, true);
                if (is_array($widgets)) {
                    foreach ($widgets as $widget) {
                        $this->widgets[$widget['hash']] = $widget;
                    }
                }
            }
        }
    }

    /**
     * Returns true if $fileName is an INI file
     *
     * @param $fileName
     * @return bool
     */
    private function isValidIniFile($fileName) {
        return in_array(pathinfo($fileName, PATHINFO_EXTENSION), array('ini'));
    }
}