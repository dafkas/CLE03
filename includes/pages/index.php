<?php
require_once dirname(__FILE__) . "/../classes/System/Databases/Database.php";
require_once dirname(__FILE__) . "/../settings.php";

$db = new \System\Databases\Database(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
$pageTitle = "Parking-soon";


