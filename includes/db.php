<?php
/* This code is included in the files to 
   add connection to database */
require dirname(__DIR__) . '/includes/init.php';

$db = new Database(DB_HOST, DB_NAME, DB_USER, DB_PASS);
return $db->getConn();