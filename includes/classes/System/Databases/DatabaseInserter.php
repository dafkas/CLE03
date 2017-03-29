<?php namespace System\Databases;
/**
 * Created by PhpStorm.
 * User: marvin_blabla
 * Date: 13-03-17
 * Time: 09:54
 */

require_once "Database.php";

class DatabaseInserter extends Database
{
    public function addUser($user)
    {
        $query = "INSERT INTO users (id, name, password, email, zipcode, housenumber)
                  VALUES (:id, :name, :password, :email, :zipcode, :housenumber)";
        $statement = $this->connection->prepare($query);
        return $statement->execute([
            ':id' => $user->id,
            ':name' =>$user->name,
            ':password' => $user->password,
            ':email' => $user->email,
            ':zipcode' => $user->zipcode,
            ':housenumber' => $user->housenumber
        ]);
    }
}