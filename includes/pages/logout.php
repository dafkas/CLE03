<?php
/**
 * Created by PhpStorm.
 * User: marvin_blabla
 * Date: 13-03-17
 * Time: 16:20
 */
require_once dirname(__FILE__) . "/../classes/System/Utils/Session.php";
$session->destroy();
header('Location:login');
exit;