<?php

class VideosView extends VideosModel
{
    public function shwoVideos()
    {
        $videos = $this->getAllVideos();
        $template = include 'allVideo.view.php';
        echo $template;
    }

    public function showLatestVideo()
    {
        $videos = $this->getLatestVideo();
        $template = include 'latestVideos.view.php';
        echo $template;
    }
}
