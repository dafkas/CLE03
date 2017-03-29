<?php
namespace System\Databases;
/**
 * Created by PhpStorm.
 * User: marvin_blabla
 * Date: 13-03-17
 * Time: 09:54
 */
require_once "Database.php";

class DatabaseSelector extends Database
{
    public function login($user, $password)
    {
        $query = "SELECT * FROM users WHERE email = :email AND password = :password";
        $statement = $this->connection->prepare($query);
        $statement->execute([
            ':email' => $user,
            ':password' => $password]);
    }

    public function getPlaces()
    {
        return $this->connection->query("SELECT * FROM places")->fetchAll(\PDO::FETCH_CLASS, "System\\Utils\\Place\\place");
    }
}