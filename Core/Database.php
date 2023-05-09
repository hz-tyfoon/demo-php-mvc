<?php 

namespace Core;

use PDO;

class Database {
    
    public $connection;
    public $statement;

    public function __construct($config, $userName = 'root', $passWord = '')
    {
        $dsn = "mysql:" . http_build_query($config, "", ";");
        $this->connection = new PDO($dsn, $userName, $passWord, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    public function query($query, $params = []){
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        return $this;
    }

    public function findOrFail(){
        $result = $this->statement->fetch();
        if( ! $result ){
            abort(Request::NOT_FOUND);
        }
        return $result;
    }
    
    public function getAll(){
        return $this->statement->fetchAll();
    }
}


