<?php

define("DB_SERVER", "localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_NAME", "animal-house");

//database-manager
$dbm = new PDO('mysql:dbname='.DB_NAME.';host='.DB_SERVER.';charset=utf8', DB_USER, DB_PASSWORD);

//urvalsfråga SQL
$sql="SELECT * FROM cats";
//$insert = "INSERT INTO cats(id, name) VALUES (id, 'Gandalf')";
$update ="UPDATE cats SET id=[value-1],`name`=[value-2]";
//$delete = "DELETE FROM cats";

//statement
$stmt = $dbm->prepare($sql);
$stmt->execute();
//$stmt2 = $dbm->prepare($insert);
//$stmt2->execute();
$stmt3 = $dbm->prepare($update);
$stmt3->execute();
//$stmt4 = $dbm->prepare($delete);
//$stmt4->execute();

$cats = $stmt->fetchAll();

//skriv ut array
var_dump($cats);
echo "<br>";

//skriv ut namnen i SUCH DATABASE
foreach ($cats as $cat){
    echo $cat["name"];
    echo "<br>";
}

?>