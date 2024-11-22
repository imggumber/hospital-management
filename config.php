<?php
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die; // Restrict file direct access
}

// core files
require './core/config.php';

// helper file
require './utils/helper.php';
