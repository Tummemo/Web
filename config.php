<?php

$db_host = "ec2-3-93-206-109.compute-1.amazonaws.com";
$db_user = "kjuiegkkkxmozq";
$db_pwd = "bf37450b31c08217f94fadc0cba06338370dd9ae484303d1131b48438ed8126f";
$db_name = "d6ribukhttlnbt";


try {
  $conn = new PDO("mysql:host=$db_host;db_name="d6ribukhttlnbt", $db_user, $db_pwd);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
