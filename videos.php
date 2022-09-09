<?php
require 'src/includes/autoload.php';

?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/style.css">

</head>

<body>
    <header class="row">
        <h1>Header</h1>
    </header>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <i class="navbar-toggler-icon"></i><span>Menü</span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/" aria-current="page">Kezdőlap</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/videos.php">Videok</a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="container-fluid row">
        <div id="video-list" class=" row col-sm-12 col-md-9">
            <?php
            $r = new Router();
            $uri = $_SERVER["REQUEST_URI"];
            $r->get($uri);
            ?>
        </div>
        <div class="sidebar d-none d-md-block col-md-3">
            <div class="msg"></div>
            <form id="add-video-form" class="form-control" action="src/index.php" method="POST">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="video_title" id="video_title" placeholder="Video címe">
                    <label for="video_title">Videó címe</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="video_id" id="video_id" placeholder="Video azonosítója">
                    <label for="video_id">Videó azonosítója</label>
                </div>
                <div class="form-floating mb-3">
                    <button class="btn btn-outline-success" type="submit" name="submit" id="submit">Küldés</button>
                </div>
            </form>
        </div>
    </main>

    <footer class="row">
        <h1>Footer</h1>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="./public/js/bootstrap.min.js"></script>

    <script src="./public/js/script.js"></script>
    <script src="./public/js/addVideo.js"></script>
</body>

</html>