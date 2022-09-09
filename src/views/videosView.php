<?php

class VideosView extends VideosModel
{
    public function shwoVideos()
    {
        $videos = $this->getAllVideos();
        foreach ($videos as $video) {
            echo '<div class="video-item card col-sm-12 col-md-auto pt-2">
                    <img class="img img-thumbnail" src="http://img.youtube.com/vi/' . $video["video_id"] . '/0.jpg" alt="Video THumbnail">
                    <p title="' . $video["video_title"] . '">' . $video["video_title"] . '</p>
                </div>';
        }
    }

    public function showLatestVideo()
    {
        $videos = $this->getLatestVideo();
        foreach ($videos as $video) {
            echo '<div class="video-item card col-sm-12 col-md-auto pt-2">
                    <img class="img img-thumbnail" src="http://img.youtube.com/vi/' . $video["video_id"] . '/0.jpg" alt="Video THumbnail">
                    <p title="' . $video["video_title"] . '">' . $video["video_title"] . '</p>
                </div>';
        }
    }
}
