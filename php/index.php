<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<div style='color: red; font-size: 24px; text-align: center; margin-top: 20%;'>
            <strong>Oh no!</strong> Connection failed: " . $conn->connect_error . "
         </div>");
}

echo "<div style='color: green; font-size: 24px; text-align: center; margin-top: 20%;'>
        <strong>Woohoo!</strong> Connected successfully to the database.
        <br><br>
        <img src='https://media.giphy.com/media/3oEjI6SIIHBdRxXI40/giphy.gif' alt='Funny GIF' style='width: 300px; height: auto;'>
      </div>";
?>% 
