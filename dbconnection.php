<?php 
$db_host = "localhost";
$db_user = "root";
$db_paswword = "";
$db_name ="farm_new";
$db_port = "3306";

// Creat conection
$conn = new mysqli($db_host, $db_user, $db_paswword, $db_name, $db_port);

// Check conection
if($conn->connect_error){
    die("Connnection Failed");
}  else {
    echo "connect";
}

?>
