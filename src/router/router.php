<?php

class Router
{
    public function get($uri, $params = "")
    {

        switch ($uri) {
            case '/':
                $content = new VideosView();
                $content->showLatestVideo();
                break;
            case '/videos':
                $content = new VideosView();
                $content->shwoVideos();
                break;
            case "/videos/?video={$params}":
                $content = new VideosView();
                $content->showSingleVideo($params);
                break;
            case '/login':
                $content = new VideosView();
                $content->showLoginPage();
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
            case '/videos':
                echo "READY";
                break;
            default:
                http_response_code(404);
                echo "<h1>ERROR: 404 Not Found</h1>";
                echo "<p>A keresett oldal nem található</p> " . $uri;
                break;
        }
    }
}
