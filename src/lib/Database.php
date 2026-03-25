<?php

<<<<<<< HEAD
require_once("src/config.php");
=======
//require_once("../../config.php");
>>>>>>> ecb1b56333f9a333ece842ef4e32c9709dffbd59

class Database
{
    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;

    public function __construct($config_path)
    {
        require_once($config_path);

        $this->host=DB_HOST;
        $this->username=DB_USER;
        $this->password=DB_PASSWORD;
        $this->database=DB_NAME;

        try
        {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
        }
        catch (PDOException $e)
        {
            if (ENV == 'DEV') echo 'Database connection failed: ' . $e->getMessage();
        }
    }

    public function query($query, $values = [], $fetchMode = PDO::FETCH_ASSOC)
    {
        if (!isset($this->connection)) return false;
        $statement = $this->connection->prepare($query);
        foreach ($values as $key => $value)
        {
            $statement->bindValue($key + 1, $value);
        }
        if ($statement->execute())
        {
            return $statement->fetchAll($fetchMode);
        }
        elseif (ENV == 'DEV')
        {
            return $statement->queryString;//$statement->errorInfo();
        }
        return false;
    }

    public function getLastInsertId()
    {
        $id = $this->connection->lastInsertId();
        if (is_numeric($id)) $id = $id + 0;
        return $id;
    }
}
