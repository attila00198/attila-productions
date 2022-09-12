<div id="video-list" class="row col-sm-12 col-md-8">
    <?php foreach ($videos as $video): ?>
    <div class="video-item card col-sm-12 pt-2">
        <img class="img img-thumbnail" src="http://img.youtube.com/vi/<?= $video["video_id"] ?>/0.jpg" alt="Video THumbnail">
        <p class="video-title" title="<?= $video["video_title"] ?>"><?= $video["video_title"] ?></p>
        <a class="play-btn btn btn-outline-success" href="/videos/?video=<?= $video["video_id"] ?>">Lejátszás</a>
    </div>
    <?php endforeach; ?>
</div>

<div class="sidebar col-sm-12 col-md-4">
    <h3>Legutóbbi bejegyzések</h3>
</div>
