<?php

$config = array(
    "db" => array(
        "dbname" => "pvm",
        "username" => "pvm_user",
        "password" => "pa$$",
        "host" => "localhost"
    ),
    "urls" => array(
        "baseUrl" => "http://localhost:41062/www/public_html"
    ),
    "paths" => array(
        "resources" => "/path/to/resources",
        "images" => array(
            "content" => $_SERVER["DOCUMENT_ROOT"] . "/images/content",
            "layout" => $_SERVER["DOCUMENT_ROOT"] . "/images/layout"
        )
    )
);

defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));

defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));


ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);

?>
