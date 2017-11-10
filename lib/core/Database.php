<?php

namespace Core;

/**
 * Class Database
 * @package Core
 */
class Database
{
    /**
     * @var string
     */
    private $host;

    /**
     * @var string
     */
    private $port;

    /**
     * @var string
     */
    private $user;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $bdd;

    /**
     * @var string
     */
    private $pdo;

    /**
     * Database constructor.
     */
    public function __construct()
    {
        $this->getConnection();
        $this->pdo = new \PDO(
            'mysql:dbname='. $this->bdd . ';host=' . $this->host . ';port=' . $this->port,
            $this->user,
            $this->password
        );
    }

    /**
     * get database connection
     */
    public function getConnection()
    {
        $database = new \SimpleXMLElement(file_get_contents(__DIR__ . '/../../config/database.xml'));
        $this->host = $database->database['host'];
        $this->port = $database->database['port'];
        $this->user = $database->database['user'];
        $this->password = $database->database['password'];
        $this->bdd = $database->database['bdd'];
    }
}