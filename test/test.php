<?php

ini_set("display_errors", "On");

define('APP_ROOT', realpath(dirname(__FILE__)));

// include lib
require_once '../app/Yaml.php';
require_once '../app/Yaml/Loader.php';
require_once '../app/Yaml/Dumper.php';


echo "<pre>";

print_r(App_Parser_Yaml::load("comments.yml"));
