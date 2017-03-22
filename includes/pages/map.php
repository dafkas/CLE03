<?php
/**
 * Created by PhpStorm.
 * User: marvin_blabla
 * Date: 20-03-17
 * Time: 13:34
 */

require_once dirname(__FILE__) . "/../classes/System/Databases/DatabaseSelector.php";
//require_once dirname(__FILE__) . "/../classes/System/Databases/Database.php";
require_once dirname(__FILE__) . "/../classes/System/Utils/Place.php";
require_once dirname(__FILE__) . "/../settings.php";
$pageTitle = "Map";

$db = new \System\Databases\DatabaseSelector(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

$places = new \System\Utils\Place\Place();
$places->getJson($db->getPlaces());
//var_dump($places);


