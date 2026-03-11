<?php
// local Datebase configuration
$LOCAL_HOST     = "localhost";
$LOCAL_DBNAME   = "app_beta";
$LOCAL_USERNAME = "postgres";
$LOCAL_PASSWORD = "unicesmag";
$LOCAL_PORT     = "5432";
//Supabase Datebase configuration
$SUPA_HOST     = "";
$SUPA_DBNMAE   = "";
$SUPA_USERNAME = "";
$SUPA_PASSWORD = "";
$SUPA_PORT     = "";

$data_connection = "
host =$LOCAL_HOST
user =$LOCAL_USERNAME
password = $LOCAL_PASSWORD
port = $LOCAL_PORT";

$conn = pg_connect($data_connection);
if (!$conn){
    echo "Error: Unable to connect to datbase ,"; exit();
}else{
    echo "Succes connection !!!";
}
?>