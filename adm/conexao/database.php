<?php

class Database
{
    private static $dbHost = 'localhost';
    private static $dbName = 'novajerusalem';
    private static $dbUser = 'root';
    private static $dbUserPassword = '';
    private static $connection = null;

    public static function connect()
    {
          try{
            self::$connection = new PDO('mysql:host='.self::$dbHost.';dbname='.self::$dbName,self::$dbUser,self::$dbUserPassword);
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
        return self::$connection;

    }

    public static function disconnect()
    {
        self::$connection = null;
    }


}


function verifyInput($data)
  {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }

/*
Database::connect();
*/


?>
