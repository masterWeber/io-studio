<?php

namespace DB;

class PDOAdapter
{
    private $connection = null;
    private $statement = null;

    public function __construct($hostName, $userName, $password, $database, $port = '3306')
    {
        try {
            $this->connection = new \PDO("mysql:host={$hostName};port={$port};dbname={$database};charset=UTF8",
              $userName, $password, array(\PDO::ATTR_PERSISTENT => true));
        } catch (\PDOException $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function prepare($sql)
    {
        $this->statement = $this->connection->prepare($sql);
    }

    public function execute()
    {
        try {
            if ($this->statement && $this->statement->execute()) {
                $data = array();

                while ($row = $this->statement->fetch(\PDO::FETCH_ASSOC)) {
                    $data[] = $row;
                }

                $result = new \stdClass();
                $result->row = (isset($data[0])) ? $data[0] : array();
                $result->rows = $data;
                $result->num_rows = $this->statement->rowCount();
            }
        } catch (\PDOException $e) {
            throw new \Exception('Error: ' . $e->getMessage() . ' Error Code : ' . $e->getCode());
        }
    }

    public function query($sql, $params = array())
    {
        $this->statement = $this->connection->prepare($sql);

        $result = false;

        try {
            if ($this->statement && $this->statement->execute($params)) {
                $data = array();

                while ($row = $this->statement->fetch(\PDO::FETCH_ASSOC)) {
                    $data[] = $row;
                }

                $result = new \stdClass();
                $result->row = (isset($data[0]) ? $data[0] : array());
                $result->rows = $data;
                $result->num_rows = $this->statement->rowCount();
            }
        } catch (\PDOException $e) {
            throw new \Exception('Error: ' . $e->getMessage() . ' Error Code : ' . $e->getCode() . ' <br />' . $sql);
        }

        if ($result) {
            return $result;
        } else {
            $result = new \stdClass();
            $result->row = array();
            $result->rows = array();
            $result->num_rows = 0;
            return $result;
        }
    }

    public function getLastId()
    {
        return $this->connection->lastInsertId();
    }

    public function isConnected()
    {
        if ($this->connection) {
            return true;
        } else {
            return false;
        }
    }

    public function __destruct()
    {
        $this->connection = null;
    }
}
