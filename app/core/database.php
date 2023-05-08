<?php

Class Database{

    public static $conn;
    public function __construct() {
       try{
            $string = DB_TYPE . ":host=" .DB_HOST . ";port=3306;dbname=" . DB_NAME;
            // for server
            // self::$conn = new PDO($string, DB_USER, DB_PASSWORD);

            // for localhost
            self::$conn = new PDO($string, DB_USER);
       }
       catch (PDOException $e){
            die($e->getMessage());
       }
    }

    public static function getInstance() {
        if (self::$conn) {
            return self::$conn;
        }
        return $instance = new self();
        // return self::$conn;
    }
    public static function newInstance() {
        return $instance = new self();
        // return self::$conn;
    }

    //read

    public function read($query, $data = array()) {
        $statement = self::$conn->prepare($query);
        $result = $statement->execute($data);

        if($result){
            $data = $statement->fetchALL(PDO::FETCH_OBJ);
            if(is_array($data)){
                return $data;
            }
        }
        return false;
    }

    //write
    public function write($query, $data = array()) {
        $statement = self::$conn->prepare($query);
        $result = $statement->execute($data);

        if($result){
            if(is_array($data)){
                return $data;
            }
        }
        return false;
    }

}



