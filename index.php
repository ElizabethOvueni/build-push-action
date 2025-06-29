<?php
$mysqli = new mysqli(
  "mysqlwebapp-server.mysql.database.azure.com",
  "tmtigjfimw@mysqlwebapp-server",
  "yLERbh$Nr6$CYYBP",
  "mysqlwebapp-database",
  3306
);

// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
echo "<h3>Connected successfully to MySQL!</h3>";

// Query the migrations table
$result = $mysqli->query("SELECT * FROM migrations");

if ($result->num_rows > 0) {
  echo "<h4>Migration Records:</h4>";
  echo "<table border='1' cellpadding='5'><tr><th>ID</th><th>Migration</th><th>Batch</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["migration"] . "</td><td>" . $row["batch"] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "No migration records found.";
}

$mysqli->close();
?>
