<div id="video-list" class="row col-sm-12 col-md-9">
    <?php foreach ($videos as $video): ?>
    <div class="video-item card col-sm-12 col-md-auto pt-2">
        <img class="img img-thumbnail" src="http://img.youtube.com/vi/<?= $video["video_id"] ?>/0.jpg" alt="Video THumbnail">
        <p title="<?= $video["video_title"] ?>"><?= $video["video_title"] ?></p>
        <a class="play-btn btn btn-outline-success" target="_blank" href="http://youtube.com/watch/?v=<?= $video["video_id"] ?>">Lejátszás</a>
    </div>
    <?php endforeach; ?>
</div>