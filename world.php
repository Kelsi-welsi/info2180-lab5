<?php
$host = 'localhost';
$username = 'localhost';
$password = 'password123';
$dbname = 'world';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET['country'])) {
// Sanitize the input to prevent SQL injection
$country = mysqli_real_escape_string($conn, $_GET['country']);

// Construct the SQL query to fetch information about the specified country
$sql = "SELECT * FROM countries WHERE name LIKE '%$country%'";

}

  if ($result->num_rows > 0) {
  // Output HTML table header
  echo "<table border='1'>
          <tr>
              <th>Country Name</th>
              <th>Continent</th>
              <th>Independence Year</th>
              <th>Head of State</th>
          </tr>";

  // Output data of each row as a table row
  while($row = $result->fetch_assoc()) {
      echo "<tr>
              <td>" . $row["country_name"] . "</td>
              <td>" . $row["continent"] . "</td>
              <td>" . $row["independence_year"] . "</td>
              <td>" . $row["head_of_state"] . "</td>
          </tr>";
  }

?>

