<?php
// Author Ken Iovino - twitter.com/keniovino
// (c) Copyright 2014, All Rights Reserved

use Slim\Slim;

class Channels {
    /**
     * list of channel names to cache
     *
     * @var array
     */
    private $channels = array();

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
        $this->app      = $app;
        $this->channels = $this->app->config('channels');
    }

    /**
     * Fetches all channels and creates a local cache
     *
     * @return void
     */
    public function cache_channels() {
        foreach ($this->channels as $channel) {
            try {
                $xml = new SimpleXMLElement($this->fetch_channel($channel));
            } catch(Exception $error) {
                $channel_error = "Cannot parse string as XML in cache.php:21 ($channel channel not found)";
                mail("ken@escalatemedia.com", "Countdown Unit Error", $channel_error);
                continue;
            }


            $html = "";
            $i    = 0;

            foreach ($xml->channel->item as $item) {
                $i++; if ($i <= 3) {
                    $html .= $this->build_item_html($item, $i);
                }
            }

            $local_file = sprintf("%s/views/channels/%s.html", $this->app->config('app_path'), $channel);
            $cache_file = fopen($local_file, 'w+');

            @chmod($local_file, 0777); // silence the warning if the file is already chmod'd
            fwrite($cache_file, "<ul>$html</ul>");
            fclose($cache_file);
        }
    }

    /**
     * Builds the html for a channels blog's line item
     *
     * @param $item
     * @param $alt
     * @return string
     */
    private function build_item_html($item, $alt) {
        // single line titles need a class added to the link for positioning purposes
        if (strlen((string)$item->title) < 25) {
            $single_class = " class=\"single\"";
        }

        $html  = "<li class=\"alt%s\">";
        $html .= "<img src=\"%s\" width=\"60\" height=\"60\" class=\"pull-left\" />";
        $html .= "<a $single_class href=\"%s\" target=\"_blank\">%s</a></li>";

        return sprintf($html, $alt, $this->build_thumbnail((string)$item->description), $item->link, $item->title);
    }

    /**
     * Builds the local thumbnail for the article and returns it's new src url
     *
     * @param $html
     * @return string
     */
    private function build_thumbnail($html) {
        if ($url = $this->fetch_items_img($html)) {
            $img_name = $this->save_remote_image($url);
            $img_path = $this->app->config('thumb_path') . "/$img_name";
            $img_src  = $this->image_create_from_any($img_path);

            $oldW = imagesx($img_src);
            $oldH = imagesy($img_src);
            $dest = imagecreatetruecolor($oldH, $oldH);

            imagecopy($dest, $img_src, 0, 0, intval($oldH / 2), 0, $oldH, $oldH);
            imagejpeg($dest, $img_path);

            imagedestroy($dest);
            imagedestroy($img_src);

            return $this->app->config('thumb_dir') . "/" . $img_name;
        }

        else {
            // TODO: return default thumbnail
        }

    }

    /**
     * Allows you to create an image based on the popular image types without worrying about what it is:
     *
     * @param $filepath
     * @return resource
     */
    private function image_create_from_any($filepath) {
        $type = getImageSize($filepath); // [] if you don't have exif you could use getImageSize()

        switch ($type['2']) {
            case 1 :
                $im = imageCreateFromGif($filepath);
                break;
            case 2 :
                $im = imageCreateFromJpeg($filepath);
                break;
            case 3 :
                $im = imageCreateFromPng($filepath);
                break;
            case 6 :
                $im = imageCreateFromBmp($filepath);
                break;
        }

        return $im;
    }

    /**
     * Saves a remote image to the local filesystem
     *
     * @param $url
     * @return mixed
     */
    private function save_remote_image($url) {
        $name = array_pop(explode("/", $url));
        $data = file_get_contents($url);
        $file = $this->app->config('thumb_path') . "/$name";

        $hand = fopen($file, 'w+');
        fwrite($hand, $data);
        fclose($hand);
        chmod($file, 0777);

        return $name;
    }

    /**
     * Returns the source of an image within the <img> tag
     *
     * @param $html
     * @return bool
     */
    private function fetch_items_img($html) {
        $doc = new DOMDocument();
        $doc->loadHTML($html);
        $imageTags = $doc->getElementsByTagName('img');

        foreach($imageTags as $tag) {
            return $tag->getAttribute('src');
        }

        return false;
    }

    /**
     * Returns the content data of a given channel
     *
     * @param $channel
     * @return bool|mixed
     */
    private function fetch_channel($channel) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, sprintf($this->app->config('feed_url'), $channel));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $contents     = curl_exec($ch);
        echo $contents;exit;
        $http_code    = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $content_type = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);

        if (!curl_errno($ch)) {
            if ($http_code == 200) {
                curl_close($ch); return $contents;
            }
        }

        return false;
    }
}