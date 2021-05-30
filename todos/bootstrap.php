<?php 

$config = require 'config.php';

require 'Connection.php';

$db = Connection::connect($config['database']); // prosledjivanje iz configa array database


require 'Todo.php';
require 'QueryBuilder.php';

$query = new QueryBuilder($db);

?>