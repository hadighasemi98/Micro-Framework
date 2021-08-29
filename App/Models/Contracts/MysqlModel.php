<?php

namespace App\Models\Contracts;
use Medoo\Medoo;


class MysqlModel extends BaseModel  {

    public function __construct()
    {
    //     try {
    //         $this->connection = new \PDO("mysql:dbname={$_ENV["DB_name"]};host={$_ENV["DB_host"]}",$_ENV["DB_userName"],$_ENV["DB_userPass"]);
    //     } catch (\PDOException $e) {
    //         echo "Connection Failed : " . $e->getMessage();
    //     }

    $this->connection = new Medoo([
        // [required]
        'type'     => 'mysql',
        'host'     => $_ENV["DB_host"],
        'database' => $_ENV["DB_name"],
        'username' => $_ENV["DB_userName"],
        'password' => $_ENV["DB_userPass"],
     
        // [optional]
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_general_ci',
        'port' => 3306,
          
        // Error mode
        // PDO::ERRMODE_SILENT (default) | PDO::ERRMODE_WARNING | PDO::ERRMODE_EXCEPTION
        'error' => \PDO::ERRMODE_EXCEPTION,
     
        // The driver_option for connection.
        'option' => [
            \PDO::ATTR_CASE => \PDO::CASE_NATURAL
        ],
     
        // [optional] Medoo will execute those commands after connected to the database.
        'command' => [
            'SET SQL_MODE=ANSI_QUOTES'
        ]
    ]);

    }

    # Create (Insert)
    public function create (array $data ) : int
    {
        $this->connection->insert($this->table,$data);
        return $this->connection->id();
    }

    # Read
    public function find ($id) : object
    {
        $result = $this->connection-> get($this->table,'*', [$this->primary_key => $id]);
        return (object)$result ;
    }

    public function get (array $columns , array $where) : array
    {
        return $this->connection->select($this->table, $columns, $where) ;
    }

    public function get_all () : array
    {
        return $this->connection->select($this->table, '*') ;
    }

    # Update
    public function update (array $columns , array $where) : int
    {
        return 1;

    }
    
    # Delete
    public function delete (array $where) : int
    {
        return 1;
    }
    
}