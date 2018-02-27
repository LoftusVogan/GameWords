<?php
/**
 * Class Database.
 * Connection to Database, query() including prepare() & execute(), resultRow(), resultColumn();
 */
namespace application\lib;

use PDO;

class Database
{
    /**
     * @var PDO
     */
    protected $database;

    /**
     * Database constructor.
     * In this constructor we are connected to database require file dbconfig.php & use PDO connection
     */
    public function __construct()
    {

        //require configuration to database
        $config = require 'application/config/dbconfig.php';
        //PDO connection
        $this->database = new PDO('mysql:host='.$config['host'].';dbname='.$config['database'].'', $config['username'], $config['password']);
    }

    /**
     * Function query including PDO prepare() and execute() & use 2 parameters. 1 parameter is SQL query, 2 parameter is array.
     * 2 parameter we are checking, and if array not empty use bindValue()
     *
     * @param $sql
     * @param array $params
     * @return \PDOStatement
     *
     */
    public function query($sql, $params = [])
    {
        //use prepare($sql);
        $stmt = $this->database->prepare($sql);
        //checking array params
        if (!empty($params)) {
            foreach ($params as $key => $val) {
                //use bindValue();
                $stmt->bindValue(':'.$key, $val);
            }
        }
        //use execute
        $stmt->execute();
        //return stmt after prepare($sql) & execute()
        return $stmt;
    }

    /**
     * resultRow() return sql query fetchAll -> FETCH_ASSOC
     * @param $sql
     * @param array $params
     * @return array
     */
    public function resultRow($sql, $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * resultColumn() return sql query fetchColumn
     * @param $sql
     * @param array $params
     * @return mixed
     */
    public function resultColumn($sql, $params = [])
    {
        $result = $this->query($sql, $params);
        return $result->fetchColumn();
    }
}
