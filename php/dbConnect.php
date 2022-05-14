<?php
    require_once dirname(__FILE__) . '\pdoConfig.php';

     try {
         $conn = new PDO ("mysql:host=$host;dbname=$dbname", $username, $password);
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
    } catch (PDOException $error) {
         die("Não foi possível se conectar ao banco de dados $dbname :" . $error->getMessage());
    }
?>