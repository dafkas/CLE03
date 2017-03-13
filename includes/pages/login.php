<?php
require_once dirname(__FILE__) . "/../classes/System/Databases/DatabaseSelector.php";
require_once dirname(__FILE__) . "/../classes/System/Users/User.php";
if(isset($_POST['submit']))
{
    $db = new \System\Databases\DatabaseSelector(DB_HOST, DB_PORT, DB_USER, DB_PASS, DB_NAME);
    $user = new \System\Users\User();
    $user->email = $_POST['email'];
    $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    //var_dump($user->password);
    $db->login($user->email, $user->password);

    $session->set('user', $user);
    header('Location:profile');
    exit;
}
$pageTitle = "login";