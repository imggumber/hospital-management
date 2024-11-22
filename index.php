<?php
require './config.php';
$meta_desc  = 'This is hospital management project';
?>

<!DOCTYPE html>
<html lang="en">

<!-- head starts here -->
<?php require './components/head.php'; ?>
<!-- head ends here -->

<body id="main" class="bg-light">
    <main class="container content d-flex flex-column justify-content-center align-items-center">
        <div class="logo d-flex flex-row align-items-center">
            <img class="me-2" src="./assets/images/heart.svg" alt="hm" width="56" height="56">
            <span class="fs-2 fw-bold">HM</span>
        </div>
        <div class="form">
            <div class="form-container">
                <?php require './components/login.php' ?>
            </div>
        </div>
    </main>
    <!-- footer starts here -->
    <?php require './components/footer.php'; ?>
    <!-- footer ends here -->
</body>

</html>
