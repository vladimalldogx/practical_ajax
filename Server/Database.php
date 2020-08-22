<?php
class Database
{
    private $con_;
    private $servername_ = "localhost";
    private $username_ = "root";
    private $password_ = "";
    private $dbname_ = "dbpractical"; //use this dbname

    public function __construct()
    {
        $this->con_ = mysqli_connect($this->servername_, $this->username_, $this->password_, $this->dbname_);
        //print_r($this->con_);
    }

    public function execute($sql)
    {
        $result = mysqli_query($this->con_, $sql);
        if ($result) {
            return $result;
        } else {
            echo "Unable to execute SQL!";
        }
    }
    
    public function __destruct()
    {
        unset($this->con_);
    }

}
