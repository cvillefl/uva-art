<?php
session_start();

// Error reporting
error_reporting(E_ALL ^ E_NOTICE);

// Scripts common to all pages
include "constants.php";
include "link-map.php";
include "general.php";
include "router.php";
?>