<?php
// local Datebase configuration
$LOCAL_HOST     = "localhost";
$LOCAL_DBNAME   = "app_beta";
$LOCAL_USERNAME = "postgres";
$LOCAL_PASSWORD = "unicesmag";
$LOCAL_PORT     = "5432";
//Supabase Datebase configuration
$SUPA_HOST     = "aws-1-us-east-1.pooler.supabase.com";
$SUPA_DBNAME   = "postgres";
$SUPA_USERNAME = "postgres.kiqssrdsixqlpqlximyl";
$SUPA_PASSWORD = "unicesmag1086358612";
$SUPA_PORT     = "6543";

$local_data_connection = "
host =$LOCAL_HOST
dbname = $LOCAL_DBNAME
user =$LOCAL_USERNAME
password = $LOCAL_PASSWORD
port = $LOCAL_PORT
";

$supa_data_connection = "
host =$SUPA_HOST
dbname = $SUPA_DBNAME
user =$SUPA_USERNAME
password = $SUPA_PASSWORD
port = $SUPA_PORT
";
// LOCAL CONNECTION
$local_conn = pg_connect($local_data_connection);
if (!$local_conn){
    echo "Error: Unable to connect to local database ,"; exit();
}else{
    echo "Local Succes connection dijo el bicho siiuuuuu !!!";
}
// SUPA CONNECTION 
$supa_conn = pg_connect($supa_data_connection);
if (!$supa_conn){
    echo "Error: Unable to connect to supabase database ,"; exit();
}else{
    echo "<br>Supabase Succes connection dijo MESSI QUE MIRAS BOBO !!!";
}
?>