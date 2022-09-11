<?php

class VideosView extends VideosModel
{
    public function shwoVideos()
    {
        $videos = $this->getAllVideos();
        $template = include_once('allVideo.view.php');
    }

    public function showLatestVideo()
    {
        $videos = $this->getLatestVideo();
        $template = include_once('src/views/latestVideos.view.php');
    }
}
