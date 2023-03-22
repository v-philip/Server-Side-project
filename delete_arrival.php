<?php
require_once('database.php');

// Get IDs
$flight_id = $_GET['flight_id'];
// Delete the product from the database
if ($flight_id != false) {
    $query = 'DELETE FROM arrival_schedule
              WHERE flight_id = :flight_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':flight_id', $flight_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// Display the Product List page
include('allflights.php');