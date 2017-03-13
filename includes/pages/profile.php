<?php
require_once dirname(__FILE__) . "/../classes/System/Databases/DatabaseSelector.php";
$pageTitle = "Profile";

// check user login
if (!$session->keyExists('user')) {
    header('Location: login');
    exit;
}
var_dump($_SESSION);
$db = new \System\Databases\Database(DB_HOST, DB_PORT, DB_USER, DB_PASS, DB_NAME);