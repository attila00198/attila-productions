<?php

class VideosModel extends Database
{
    protected function getAllVideos()
    {
        $sql = "SELECT * FROM videos";
        $stmt = $this->connect()->query($sql);
        $result = $stmt->fetchAll();
        return $result;
    }

    protected function getLatestVideo() {
        $sql = "SELECT * FROM videos ORDER BY id DESC LIMIT 3";
        $stmt = $this->connect()->query($sql);
        $result = $stmt->fetchAll();
        return $result;
    }

    public function getVideo($video)
    {
        $sql = "SELECT * FROM videos WHERE video_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$video]);
        $result = $stmt->fetch();
        return $result;
    }

    protected function addVideo(string $videoTitle, string $videoId) {
        $sql = "INSERT INTO videos (video_title, video_id) VALUES (?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$videoTitle, $videoId]);
    }
}
