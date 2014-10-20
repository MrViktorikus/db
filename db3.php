<?php

define("DB_SERVER", "localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_NAME", "animal-house");

$dbh = new PDO('mysql:dbname='.DB_NAME.';host='.DB_SERVER.';charset=utf8', DB_USER, DB_PASSWORD);

//urvalsfråga SQL
$sql="SELECT * FROM cats";

//statement
$stmt = $dbh->prepare($sql);
$stmt->execute();

$cats = $stmt->fetchAll();

var_dump($cats);
echo "<br>";

//echo $cats[0]["name"];
foreach ($cats as $cat){
    echo $cat["name"];
    echo "<br>";
}


?>