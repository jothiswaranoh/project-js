<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);//showing errors in browser
include 'libs/load.php';
load_template("header");
load_template("banner");
load_template("contactAddress");
load_template("contactForm");
load_template("footer");
?>