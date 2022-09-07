<?php

namespace Router;

use Controllers\VideosController;
use Views\VideosView;

class Router
{
    public function get($uri)
    {

        switch ($uri) {
            case '/':
                $content = new VideosView();
                $content->showLatestVideo();
                break;
            case '/videos.php':
                $content = new VideosView();
                $content->shwoVideos();
                break;
            default:
                http_response_code(404);
                echo "<h1>ERROR: 404 Not Found</h1>";
                echo "<p>A keresett oldal nem található</p> " . $uri;
                break;
        }
    }

    public function post($uri)
    {

        switch ($uri) {
            case '/videos.php':
                $content = new VideosView();
                $content->shwoVideos();
                break;
            default:
                http_response_code(404);
                echo "<h1>ERROR: 404 Not Found</h1>";
                echo "<p>A keresett oldal nem található</p> " . $uri;
                break;
        }
    }
}
