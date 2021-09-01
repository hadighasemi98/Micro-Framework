<?php

namespace App\Models\Contracts;
use Medoo\Medoo;


class MysqlModel extends BaseModel  {

    // protected $pdo ;
    public function __construct($id = null)
    {
        // try {
        //     $this->pdo = new \PDO("mysql:dbname={$_ENV["DB_name"]};host={$_ENV["DB_host"]}",$_ENV["DB_userName"],$_ENV["DB_userPass"]);
        // } catch (\PDOException $e) {
        //     echo "Connection Failed : " . $e->getMessage();
        // }

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

        if(!is_null($id))
           return $this->find($id);

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
        $sql = $this->connection-> get($this->table,'*', [$this->primary_key => $id]);

        foreach ($sql as $col => $val) {
            $this->attributes[$col] = $val;
        }
        return $this ;
    }

    public function get (array $columns , array $where) : array
    {
        return $this->connection->select($this->table, $columns, $where) ;
    }

    public function get_all () : array
    {
        return  $this->connection->select($this->table, '*') ;

    }

    # Update
    public function update (array $data , array $where) : int
    {
        $sql = $this->connection->update($this->table, $data, $where);
        return $sql->rowCount() ;

    }
    
    # Delete
    public function delete (array $where) : int
    {
        $sql = $this->connection->delete($this->table, $where);
        return $sql->rowCount() ;
    }
    
}