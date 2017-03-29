<?php
//Database credentials
define("DB_HOST", "127.0.0.1");
define("DB_PORT", "8889");
define("DB_USER", "root");
define("DB_PASS", "root");
define("DB_NAME", "parking-soon");

//Define custom constants to use with project
define("DATA_PATH", dirname(__FILE__) . "/data/");
define("BASE_PATH", "/CLE03/");

//Custom error handler, so every error will throw a custom ErrorException
set_error_handler(function ($severity, $message, $file, $line) {
    throw new ErrorException($message, $severity, $severity, $file, $line);
});
