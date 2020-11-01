<?php
    function getDB(){
        return  pg_connect("host=ec2-3-208-224-152.compute-1.amazonaws.com
                dbname=denairoprqbebh
                port=5432
                user=lvwkagdnejiggw
                password=e2292f87501fc7d98ccbee1b64b347da9cfc0e942e1c6416ce3c0be2d135d565") or die("Connection failed!");
    }
    $age = $_POST['age'];
    $name = $_POST['name'];
    
    $db = getDB();
    $db_name = "Underfined.";
    $db_host = "Underfined.";
    $db_post = "Underfined.";

    if ($db){
        $db_name = pg_dbname($db);
        $db_host = pg_host($db);
        $db_post = pg_port($db);
        echo"Name: $db_name, Host: $db_host, Post: $db_post";
        pg_close($db); 
    }?>