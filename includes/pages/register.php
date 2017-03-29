<?php
require_once dirname(__FILE__) . "/../classes/System/Databases/DatabaseInserter.php";
require_once dirname(__FILE__) . "/../classes/System/Users/User.php";

$pageTitle = "Register";

if(isset($_POST['submit']))
{
    $db = new \System\Databases\DatabaseInserter(DB_HOST, DB_PORT, DB_USER, DB_PASS, DB_NAME);
    $user = new \System\Users\User();
    $user->email = $_POST['email'];
    $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $user->name = $_POST['name'];
    $user->zipcode = $_POST['zipcode'];
    $user->housenumber = $_POST['housenumber'];
    $db->addUser($user);

    header('Location:index');
    exit;
}

