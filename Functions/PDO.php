<?php
    $dsn = 'mysql:host=localhost; dbname=test';
    $user = 'root';
    $password = '';
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);

    try{
        $dp = new PDO($dsn, $user, $password, $options); // Start new connect
        $dp->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set Attribute
    }
    catch(PDOException $e){
        echo 'failed' .  $e->getMessage();
    }

function getRow($table, $field, $value){
        global $dp;
        $STH = $dp -> prepare( "SELECT * FROM `$table` WHERE `$field`='$value' " );
        $STH -> execute();
        $result = $STH -> fetch();
        if($result) return $result;
        else false;
}