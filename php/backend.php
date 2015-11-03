<?php

$db = new PDO('mysql:host=localhost;dbname=lucyrawl_jdi_test;charset=utf8', 'lucyrawl_jditest', 'w*3[wnMIJ#MR');

$query = "SELECT * FROM `cars`";
$statement = $db->prepare($query);
$statement->execute();
$cars = $statement->fetchAll();

 ?>
