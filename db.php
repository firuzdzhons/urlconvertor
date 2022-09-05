<?php


function connect($dsn, $username, $password)
{
    try {
        $conn = new PDO($dsn, $username, $password);
        
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
        return $conn;
        
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
}
