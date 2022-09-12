<?php

class VideosView extends VideosModel
{
    public function shwoVideos()
    {
        $videos = $this->getAllVideos();
        $view = include_once('allVideo.view.php');
    }

    public function showLatestVideo()
    {
        $videos = $this->getLatestVideo();
        $view = include_once('src/views/latestVideos.view.php');
    }

    public function showSingleVideo($video)
    {
        $vid = $this->getVideo($video);
        $videos = $this->getAllVideos();
        $view = include_once('src/views/singleVideo.view.php');
    }

    public function showLoginPage()
    {
        $view = include_once('src/views/login.view.php');
    }
}
