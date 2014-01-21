<?php
/**
 * Author: Ken Iovino - www.twitter.com/keniovino
 * (c) Copyright 2014+, All Rights Reserved
 */

/**
 * Class CliWidget
 * Used to create and delete widgets from the project using the console
 *
 * From the app's root directory:
 *  $ php cli.php newWidget [string camelcase] WidgetName [integer] Versions
 *  $ php cli.php delWidget [string camelcase] WidgetName
 *  $ php clic.php newHash
 */
class CliWidget {
    /**
     * The user's request data from the console
     *
     * @var array
     */
    private $request = array();

    /**
     * The pre-made hashes are stored here for later use during the widget creation
     *
     * @var array
     */
    private $hashes = array();

    /**
     * The title and slug of the widget are stored in this variable
     *
     * @var array
     */
    private $titles = array();

    /**
     * The number of versions to create of this widget
     *
     * @var int
     */
    private $versions = 0;

    /**
     * Constructor
     */
    public function __construct($request) {
        $this->request = $request;
    }

    /**
     * Creates a new blank widget
     */
    public function newWidget() {
        $this->titles['name'] = $this->prepWidgetName($this->request[2]);
        $this->titles['slug'] = $this->prepWidgetSlug($this->titles['name']);
        $this->hashes         = $this->prepWidgetHash($this->request[3]);
        $this->versions       = $this->request[3];

        // create config file
        echo exec(sprintf("touch config/widgets/%s.ini", $this->titles['slug']));
        echo exec(sprintf("echo '%s' >> config/widgets/%s.ini", $this->prepWidgetConfig(), $this->titles['slug']));

        // create css file, imgs directory and the view directory
        echo exec(sprintf("touch public/assets/css/%s.scss", $this->titles['slug']));
        echo exec(sprintf("touch public/assets/css/%s.css", $this->titles['slug']));
        echo exec(sprintf("mkdir public/assets/imgs/%s", $this->titles['slug']));
        echo exec(sprintf("mkdir views/widgets/%s", $this->titles['slug']));

        // create view & example files
        for ($i = 1; $i <= $this->versions; $i++) {
            $viewHtml = $this->prepWidgetView();
            echo exec(sprintf("touch views/widgets/%s/v%s.php", $this->titles['slug'], $i));
            echo exec(sprintf("echo '%s' >> views/widgets/%s/v%s.php", $viewHtml, $this->titles['slug'], $i));

            $exampleHtml = $this->prepWidgetExample($i);
            echo exec(sprintf("touch views/examples/%s-v%s.php", $this->titles['slug'], $i));
            echo exec(sprintf("echo '%s' >> views/examples/%s-v%s.php", $exampleHtml, $this->titles['slug'], $i));

        }
    }

    /**
     * Deletes a widget from the project and all of it's files
     */
    public function delWidget() {
        $this->titles['name'] = $this->prepWidgetName($this->request[2]);
        $this->titles['slug'] = $this->prepWidgetSlug($this->titles['name']);

        // remove widget's ini file
        echo exec(sprintf("rm config/widgets/%s.ini", $this->titles['slug']));

        // remove the css file, imgs directory and the view directory
        echo exec(sprintf("rm public/assets/css/%s.scss", $this->titles['slug']));
        echo exec(sprintf("rm public/assets/css/%s.css", $this->titles['slug']));
        echo exec(sprintf("rm -fr public/assets/imgs/%s", $this->titles['slug']));
        echo exec(sprintf("rm -fr views/widgets/%s", $this->titles['slug']));
    }

    /**
     * Breaks a up a 'CamelCase' string into regular words with spaces
     *
     * @param $name
     * @return string
     */
    private function prepWidgetName($name) {
        $title = "";
        $found = preg_match_all('/((?:^|[A-Z])[a-z]+)/', $name, $matches);

        if ($found) {
            foreach ($matches[1] as $word) {
                $title .= " $word";
            }

            return trim($title);
        }

        return $name;
    }

    /**
     * Converts a string into a slug
     *
     * @param $slug
     * @return string
     */
    private function prepWidgetSlug($slug) {
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $slug)));
    }

    /**
     * Returns an array of hashes
     *
     * @param $versions
     * @return array
     */
    private function prepWidgetHash($versions) {
        $hashes = array();
        for ($i = 1; $i <= $versions; $i++) {
            $hashes[$i] = md5(time() + mt_rand());
        }
        return $hashes;
    }

    /**
     * Returns the widget's config settings in an INI file string format
     *
     * @return string
     */
    private function prepWidgetConfig() {
        $line  = "[version%s]\nhash = %s\nview = /views/widgets/%s/v%s.php\n\n";
        $lines = "";

        for ($i = 1; $i <= $this->versions; $i++) {
            $lines .= sprintf($line, $i, $this->hashes[$i], $this->titles['slug'], $i);
        }

        return $lines;
    }

    /**
     * Returns a HTML template of the widget
     *
     * @return string
     */
    private function prepWidgetView() {
        return '<!DOCTYPE html>\n<html>\n<head>\n\t<?php echo $this->helper->renderCss("main"); ?>\n\t<?php echo $this->helper->renderCss("' . $this->titles['slug'] . '"); ?>\n</head>\n<body>\n\t<div id="wf_holiday_countdown">\n\t\t<div id="wf_holiday_header">\n\t\t\t<div id="wf_widget_by">Brought to you by <span>' . $this->titles['name'] . '</span></div>\n\t\t</div>\n\t\t<div id="wf_holiday_content">\n\t\t\t' . $this->titles['name'] . ' top\n\t\t</div>\n\t\t<div id="wf_holiday_footer">\n\t\t\t' . $this->titles['name'] . ' bot\n\t\t</div>\n\t</div>\n</body>\n</html>\n';
    }

    /**
     * Returns the example's view HTML
     *
     * @param $version
     * @return string
     */
    private function prepWidgetExample($version) {
        return '<!-- Womensforum.com - ' . $this->titles['name'] . ' v' . $version . ' -->\n<script type="text/javascript" src="http://<?php echo $_SERVER[\'HTTP_HOST\'] ?>/v2/widget.min.js"></script>\n<div id="wf_widget"></div>\n<script>com.womensforum.widgets.load("' . $this->hashes[$version] . '", "wf_widget");</script>';
    }
}

if ($argv[1] == 'newWidget') {
    $cli = new CliWidget($argv);
    $cli->newWidget();
}

if ($argv[1] == 'delWidget') {
    $cli = new CliWidget($argv);
    $cli->delWidget();
}

if ($argv[1] == 'newHash') {
    print md5(time() + mt_rand()) . "\n";
}