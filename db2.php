<?php
try{
$dbh = new PDO('mysql:dbname=animalhouse;host=localhost;charset=utf8','root', '');

if(empty($dbh)){
    throw new  Exception("PDO could not be created");
}else{
    echo "Yup, it worked. <br>"; 
}}
catch(Exception $e){
    throw new Exception("Connetcion failure: " . $e->getMessage());
}

?>
