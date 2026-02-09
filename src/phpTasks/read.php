<?php 
$title = "Read Data";
include 'header.php'; 
include 'db.php'; // connect to the database here that we created in db.php

//  data retrieve command from studentsinfo 
$sql = "SELECT * FROM studentsinfo";
$result = $conn->query($sql);

echo "<h2>List of Students</h2>";

if ($result->num_rows > 0) {
    echo "<table class='table table-striped mt-3'>
            <thead class='table-dark'>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>City</th>
                    <th>Group ID</th>
                </tr>
            </thead>
            <tbody>";

    // show data of each row by row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='updatesingle.php?id={$row['id']}'>{$row['id']}</a></td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['city']}</td>
                <td>{$row['groupId']}</td>
              </tr>";
    }
    echo "</tbody></table>";
} else {
    echo "<p class='alert alert-info'>No results found</p>";
}

$conn->close();
include 'footer.php'; 
?>