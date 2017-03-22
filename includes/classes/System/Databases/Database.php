<?php
namespace System\Databases;

/**
 * Class Database
 * @package System\Databases
 */
class Database
{
    private $host, $port, $username, $password, $database;

    /**
     * @var \PDO
     */
    protected $connection;

    /**
     * Database constructor.
     *
     * @param $host
     * @param $username
     * @param $port
     * @param $password
     * @param $database
     */
    public function __construct($host, $username, $password, $database, $port)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        $this->port = $port;
        $this->connect();
    }

    /**
     * Retrieve a new PDO instance to communicate with the DB
     *
     * @throws \Exception
     */
    private function connect()
    {
        try {
            $this->connection = new \PDO("mysql:dbname=$this->database;host=$this->host;port=$this->port", $this->username, $this->password);
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            throw new \Exception("DB Connection failed: " . $e->getMessage());
        }
    }

    /**
     * @return \PDO
     */
    public function getConnection(): \PDO
    {
        return $this->connection;
    }
}
