<?php

define("DB_SEVERNAME", "localhost:3306");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "db-university");

$connessione = new mysqli(DB_SEVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME,);

if( $connessione && $connessione->connect_error) {
    echo "Error" . $connessione->connect_error;
} else{
    echo "Connection OK!";
}

?>