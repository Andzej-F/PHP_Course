<?php

/**
 * Get the database connection
 * 
 * @return object Connection to a MySQL server
 */
function getDB()
{
  $db_host = "localhost";
  $db_name = "cms";
  $db_user = "cms_www";
  $db_pass = "h(p)g)7.HNwg6as5";

  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

  if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
  }

  return $conn;
}



// echo '<pre>';
// var_dump($conn);
// print_r($conn);
/* mysqli Object
(
    [affected_rows] => 0
    [client_info] => mysqlnd 8.1.6
    [client_version] => 80106
    [connect_errno] => 0
    [connect_error] => 
    [errno] => 0
    [error] => 
    [error_list] => Array
        (
        )

    [field_count] => 0
    [host_info] => localhost via TCP/IP
    [info] => 
    [insert_id] => 0
    [server_info] => 10.4.24-MariaDB
    [server_version] => 100424
    [sqlstate] => 00000
    [protocol_version] => 10
    [thread_id] => 454
    [warning_count] => 0
    */
// echo get_class($conn); // mysqli
// echo '</pre>';
// exit();
