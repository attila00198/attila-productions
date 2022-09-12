<div class="row justify-content-between g-2">
    <div class="video col-sm-12 col-md-8 px-md-4">
        <iframe width="960" height="540" src="https://www.youtube.com/embed/<?= $vid["video_id"] ?>" title="<?= $vid["vido_title"] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h3 class="video-title" title="<?= $vid["video_title"] ?>"><?= $vid["video_title"] ?></h3>
    </div>
    <div class="sidebar col-sm-12 col-md-3">
        <div id="video-list" class="row">
            <?php foreach ($videos as $video) : ?>
                <?php if ($video["video_id"] == $vid["video_id"]) : ?>
                    <?php continue ?>
                <?php else : ?>
                    <div class="video-item p-2">
                        <img class="img img-thumbnail" src="http://img.youtube.com/vi/<?= $video["video_id"] ?>/0.jpg" alt="Video THumbnail">
                        <p class="video-title" title="<?= $video["video_title"] ?>"><?= $video["video_title"] ?></p>
                        <a class="play-btn btn btn-outline-success" href="/videos/?video=<?= $video["video_id"] ?>">Lejátszás</a>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>