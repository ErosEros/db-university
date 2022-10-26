<?php

define("DB_SEVERNAME", "localhost:3306");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "db-university");

$connessione = new mysqli(DB_SEVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME,);

if( $connessione && $connessione->connect_error) {
    echo "Connection Failed: " . $connessione->connect_error;
    die();
}
    // echo "Connection OK!";

    
    $sql = "SELECT `name`, `surname`, `office_address` FROM `teachers`"; 
    $result = $connessione->query($sql);

    if($result && $result->num_rows > 0) {
        // uso il ciclo while per farmi restituire tutti i records in ordine
        while($teachers = $result->fetch_assoc()) {
        echo "<div>"."Name: ".$teachers['name']." "."Surname: ".$teachers['surname']." "."Office Address: ".$teachers['office_address']." ";
        }
    }elseif($result) {
        echo "0 results";
    }




$connessione->close();
?>