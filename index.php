<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>
        Geochat
    </title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="leaflet/leaflet.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script type="text/javascript" src="js/he.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="leaflet/leaflet.js"></script>
    <script type="text/javascript" src="js/api.js"></script>
</head>

<body class="mb-4">
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark mb-3">
        <div class="container">
            <a class="navbar-brand" href="?">
                <img src="map.png" width="32" />
                Geochat
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?">Messages</a>
                    </li>
                    <li class="nav-item show_if_connected">
                        <a class="nav-link active" aria-current="page" href="?page=post">Publier un message</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?page=login">
                        <div class="show_if_connected">Mon compte</div>
                        <div class="show_if_not_connected">Connexion</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php
        $page = $_GET['page'] ?? 'messages';

        if ($page == 'messages') {
            include('messages.php');
        } else if ($page == "post") {
            include('post.php');
        } else if ($page == "login") {
            include('login.php');
        }
        ?>
    </div>
</body>

</html>