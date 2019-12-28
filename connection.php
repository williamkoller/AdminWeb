<?php
//Get Heroku ClearDB connection information
$cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server   = $cleardb_url["us-cdbr-iron-east-05.cleardb.net"];
$cleardb_username = $cleardb_url["b932438974ae42"];
$cleardb_password = $cleardb_url["5b72427"];
$cleardb_db       = substr($cleardb_url["heroku_9a5b49a3240fab4"],1);


$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'    => '',
    'hostname' => 'us-cdbr-iron-east-05.cleardb.net',
    'username' => 'b932438974ae42',
    'password' => '5b72427',
    'database' => 'heroku_9a5b49a3240fab4',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);