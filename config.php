<?php
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="crudapp";

    $conn=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
    if(!$conn){
        die("Cloud not connect to database".mysqli_connect_error());
    }

//Para testar a conexão
//    else{
//        echo "Connected successfully to database!";
//    }

?>