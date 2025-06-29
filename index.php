<?php
$mysqli = new mysqli(
  "mysqlwebapp-server.mysql.database.azure.com",
  "tmtigjfimw@mysqlwebapp-server",
  "yLERbh$Nr6$CYYBP",
  "mysqlwebapp-database",
  3306
);

if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
echo "Connected successfully to MySQL!";
?>
