<?php
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die; // Restrict file direct access
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= !empty($meta_title) ? $meta_title . ' | HM' : 'Hospital Management' ; ?></title>
    <meta name="description" content="<?= $meta_desc; ?>">
    <link rel="shortcut icon" href="./assets/images/heart.svg" type="image/x-icon">
    <link rel="stylesheet" id="bootstrap-css" href="./assets/css/main.min.css">
    <link rel="stylesheet" id="custom-css" href="./assets/css/custom.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>