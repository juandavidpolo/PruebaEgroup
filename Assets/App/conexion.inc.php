<?php
function conection(){
    try{
        return (new PDO('mysql:host=localhost;port=3306;dbname=benditaempanada', 'root', ''));
    } catch (PDOException $exception) {
    	exit('Failed to connect to database!');
    }
}