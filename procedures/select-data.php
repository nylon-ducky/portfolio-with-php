<?php
// REQUIRE CONNECTION
require 'connect-to-db.php';

// DEFINE QUERY
$sql = 'SELECT name, message FROM guestbook';
$result = $conn->query($sql);

// ENSURE DATA EXISTS 
if($result->num_rows > 0) {

    //LOOP THROUGH DATA AND DISPLAY
    while($row = $result->fetch_assoc()) {
        echo '<article claass="posts">
        <header class="names">' . $row['name'] . '</header>
        <p class="messages">
        ' . $row['message'] . '
        </p>
        </article><hr/>';
    }
} else {
    echo ' No data in table.';
}