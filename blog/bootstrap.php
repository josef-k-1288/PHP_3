<?php 

$config = require 'config.php';

require 'classes/Connection.php';

$db = Connection::connect($config['database']); // prosledjivanje iz configa array database

require 'classes/QueryBuilder.php';

$query = new QueryBuilder($db);

?>