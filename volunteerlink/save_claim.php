<?php
// Database connection
include ('dbconnect.php');
include ('id.php');

// Retrieve form data
$id_user = $_POST['id_user'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$login = $_POST['login'];
$event = $_POST['event'];
$description = $_POST['description'];

// Prepare SQL statement to prevent SQL injection
$stmt = $mysqli->prepare('INSERT INTO claim (id_user, name, lastname, email, login, event, description) VALUES (?,?,?,?,?,?,?)');

// Bind parameters and execute the statement
$stmt->bind_param('issssss', $id_user, $name, $lastname, $email, $login, $event, $description);

if (!$stmt->execute()) {
    die("Error: Failed to insert claim into the database.");
}

// Get the ID of the inserted claim
$claim_id = $stmt->insert_id;

// Check if the event exists in the database
$result = $mysqli->query("SELECT id FROM event WHERE name = '$event' ");

if ($result->num_rows > 0) {
    $event_id = $result->fetch_assoc()['id'];

    // Update the claim with the event ID
    $update_stmt = $mysqli->prepare('UPDATE claim SET event =? WHERE id =?');
    $update_stmt->bind_param('ii', $event_id, $claim_id);

    if (!$update_stmt->execute()) {
        die("Error: Failed to update claim with event ID.");
    }
} else {
    // Handle the case when the event does not exist in the database
    echo "Event not found in the database.";
}

// Redirect to a success page or display a success message
header('Location: event.php');
exit;
?>