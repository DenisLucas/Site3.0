<?php 
     $host = 'localhost';
     $user = 'root';
     $password = '--------';
     $dbname = 'Projects';
     //Set dsn
     $dsn ='mysql:host='. $host .';dbname='. $dbname;
     //create a pdo connection
     $connection = new PDO($dsn,$user,$password);
     //pdo querry
     $stm = $connection->query('SELECT * FROM posts');
?>
