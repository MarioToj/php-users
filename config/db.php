<?php
    class db{
        private $host= "btjo445btnvw5ygqf5m2-mysql.services.clever-cloud.com";
        private $dbname="btjo445btnvw5ygqf5m2";
        private $user="u98vz4fkujkxjskm";
        private $password="arMBMpQOENb8Otqya5df";
        public function conexion(){
            try{
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
                return $PDO;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }
    }

?>