<?php
require './config.php';
?>

<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" id="bootstrap-css" href="./assets/css/main.min.css">
        <link rel="stylesheet" id="custom-css" href="./assets/css/custom.min.css">
        <link rel="shortcut icon" href="./assets/images/heart.svg" type="image/x-icon">
    </head>

    <body id="main" class="bg-light">
        <main class="container content d-flex flex-column justify-content-center align-items-center">
            <div class="logo d-flex flex-row align-items-center">
                <img class="me-2" src="./assets/images/heart.svg" alt="hm" width="56" height="56">
                <span class="fs-2 fw-bold">HM</span>
            </div>
            <div class="form">
                <div class="form-container">
                    <?php require './components/auth/login.php' ?>
                </div>
            </div>
        </main>
        <footer>

        </footer>
        <script id="popper-js" src="./assets/js/popper.min.js"></script>
        <script id="main-js" src="./assets/js/main.min.js"></script>
    </body>

</html>
