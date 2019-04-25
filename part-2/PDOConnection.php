<?php

/**
 * Created by PhpStorm.
 * User: SADIQ
 * Date: 19.04.2019
 * Time: 20:13
 */
class PDOConnection
{

    private $c_type;
    private $db_name;
    private $db_host;
    private $db_user;
    private $db_pwd;
    function __construct($connection_type,array $params)
    {
        $this->c_type=$connection_type;
        $this->db_name=$params[0];
        $this->db_host=$params[1];
        $this->db_user=$params[2];
        $this->db_pwd=$params[3];
    }


    public function sqliteConnect(){
        return  new PDO("sqlite:{$this->db_name}");
    }

    public function mysqlConnect(){
        return new PDO("mysql:host=$this->db_host;dbname=$this->db_name",$this->db_user,$this->db_pwd);

    }

    public function pgsqlConnect(){
        return new PDO("pgsql:dbname={$this->db_name};host={$this->db_host}",$this->db_user,$this->db_pwd);
    }

    public function execute(){
       switch ($this->c_type){
           case 'sqlite':return $this->sqliteConnect(); break;
           case 'mysql':return $this->mysqlConnect(); break;
           case 'pgsql':return $this->pgsqlConnect(); break;
           default :    return $this->sqliteConnect(); break;
       }

    }

}


try {
    $pdo = new PDOConnection('sqlite', array('ayiq-surucu.db'));
    $pdo->execute();

}catch (Exception $e){
    echo 'ERROR='.$e->getMessage();
}