<?php 

    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "exampleshop_db";
    
    $conn = mysqli_connect($db_server, $db_username, $db_password, $db_name)or die(mysqli_connect_error());


?>