<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = include "includes/db.php";

//$data = BookingManager::getAll($conn);

$data = BookingManager::getStatus($conn);

// foreach($data as $item)
// {
//    // if($item['id'] == 1){
//     echo $item['customer_name'] . ' booking status is ' . $item['status'];
//    //}
// }

var_dump($data);

// if ($conn){
//  echo "Connected successfully";
// }else
// {
//  echo "Connection failed: " . $e->getMessage();
// }