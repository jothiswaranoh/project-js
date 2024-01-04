<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);//showing errors in browser
include 'libs/load.php';
load_template("header");
load_template("about");
load_template("features");
load_template("footer");
?>