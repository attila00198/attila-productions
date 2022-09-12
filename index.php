<?php
include 'src/includes/autoload.php';

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
    <link rel="stylesheet" href="/public/css/style.css">

</head>

<body>
    <header class="row justify-content-between align-items-center mb-2 p-4 g-2">
        <div id="pate-title" class="col-auto">
            <h1>Attila Productins</h1>
        </div>
    </header>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <i class="navbar-toggler-icon"></i><span>Menü</span>
        </button>
        <div class="collapse justify-content-between navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/" aria-current="page">Kezdőlap</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/videos">Videok</a>
                </li>
            </ul>
            <div class="px-md-5">
                <a class="btn btn-success" href="/login">Bejelentkezés</a>
            </div>
        </div>
    </nav>

    <main class="row container-fluid">
        <?php
        $r = new Router();
        $uri = $_SERVER["REQUEST_URI"];
        if (!$_GET) {
            $r->get($uri);
        } else {
            $vid = $_GET["video"];
            $params = $vid;
            $r->get($uri, $params);
        }
        ?>
    </main>

    <footer class="row container">
        &copy; Copyright 2022 Attila Productions
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="/public/js/bootstrap.bundle.js"></script>

    <script src="/public/js/script.js"></script>
    <!-- <script src="./public/js/addVideo.js"></script> -->
</body>

</html>