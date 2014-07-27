<?php
// Author Ken Iovino - twitter.com/keniovino
// (c) Copyright 2014, All Rights Reserved

use Slim\Slim;

class ContractorTalk extends Feed {
    /**
     * the url of the rss feed to use
     *
     * @var array
     */
    private $feed = 'http://www.contractortalk.com/articles/index.php?feed=rss2';

    /**
     * The name of the cached file
     *
     * @var string
     */
    private $file = 'contractor-talk';

    /**
     * Constructor
     */
    public function __construct(Slim $app) {
        parent::__construct($app);
    }

    /**
     * Fetches all channels and creates a local cache
     *
     * @return void
     */
    public function run() {
        echo "Updating Blog Data from ContractorTalk<br>";
        $this->build_cache_file($this->feed, $this->file);
        echo "Done";
    }
}