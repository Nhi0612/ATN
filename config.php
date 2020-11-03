<?php

define('DB_SERVER', 'ec2-3-208-224-152.compute-1.amazonaws.com');
define('DB_USERNAME', 'lvwkagdnejiggw');
define('DB_PASSWORD', 'e2292f87501fc7d98ccbee1b64b347da9cfc0e942e1c6416ce3c0be2d135d565');
define('DB_NAME', 'denairoprqbebh');
 
/* Attempt to connect to PostgreSQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());


?>

