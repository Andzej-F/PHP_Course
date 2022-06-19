<?php

$name = "Radio";
$desc = "A device for listening to radio broadcasts";
$price = 14.99;

$sql = "INSERT INTO product (name, description, price)
        VALUES (?, ?, ?)";  // 1. Write your SQL here

$stmt = mysqli_prepare($conn, $sql);

if ($stmt === false) {

  echo mysqli_error($conn);
} else {

  $ret = mysqli_stmt_bind_param($stmt, "ssd", $name, $desc, $price);  // 2. Add the arguments here

  if (mysqli_stmt_execute($stmt)) {

    $id = mysqli_insert_id($conn);  // 3. Get the ID of the newly-inserted record here

  }
}
