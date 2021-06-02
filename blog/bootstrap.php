<?php 

session_start();

$config = require 'config.php';

require 'classes/Connection.php';

$db = Connection::connect($config['database']); // prosledjivanje iz configa array database

require 'classes/QueryBuilder.php';
require 'classes/User.php';
require 'classes/Post.php';

$query = new QueryBuilder($db);
$user = new User($db);
$post = new Post($db);

?>