<?php

  
function getRandString($n) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
  
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
  
    return $randomString;
}


function createUrl(PDO $pdo, $fullUrl, $code)
{
    try {
        $sql = "INSERT INTO urls (full_url, code) VALUES (?,?)";
    
        $pdo->prepare($sql)->execute([$fullUrl, $code]);

        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";

        return $protocol.'://'.$_SERVER['SERVER_NAME'].'/'.$code;
    } catch (Exception $e) {
        die("Insert failure: ".$e->getMessage());
    }
}


function getUrl(PDO $pdo, $code)
{
    try {
        $stmt = $pdo->prepare("SELECT * FROM urls WHERE code=? LIMIT 1"); 
        $stmt->execute([$code]); 
        return $stmt->fetch();
    } catch (Exception $e) {
        die("Select failure: ".$e->getMessage());
    }
}