<?php


class DB {
    private $adapter;

    public function __construct($adapterName, $hostName, $userName, $password, $database, $port = NULL) {
        $class = 'DB\\' . $adapterName . 'Adapter';

        if (class_exists($class)) {
            $this->adapter = new $class($hostName, $userName, $password, $database, $port);
        } else {
            throw new \Exception('Error: Could not load database adaptor ' . $adapterName . '!');
        }
    }

    public function query($sql) {
        return $this->adapter->query($sql);
    }

    public function getLastId() {
        return $this->adapter->getLastId();
    }

    public function connected() {
        return $this->adapter->connected();
    }
}