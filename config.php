<?php

$db_host = "ec2-3-93-206-109.compute-1.amazonaws.com";
$db_user = "pclryflarbmofh";
$db_pwd = "bc1da9b9b01388d5cdd84c8da4dca26201dd83f053110099cf5b3e14226372be";
$db_name = "d6gi0m2pobhelr";


try {
  $conn = new PDO("mysql:host=$db_host;db_name, $db_user, $db_pwd);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
