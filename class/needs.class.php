<?php

  class N{

    public static $e;
    public static $database;

    public static function _DB(){
      try {
        $db__username = "username";
        $db__password = "password"; 
        self::$database = new PDO('mysql:host=127.0.0.1;dbname=mmre;charset=utf8mb4', $db__username, $db__password);
        self::$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $e = self::$e;
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
      return self::$database;
    }

  }

?>
