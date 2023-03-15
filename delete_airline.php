<?php
require_once('database.php');

// Get IDs
$flight = filter_input(INPUT_POST, 'flight_id', FILTER_VALIDATE_INT);

// Delete the product from the database
if ($product_id != false) {
    $query = 'DELETE FROM depature_schedule
              WHERE flight_id = :flight_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':flight_id', $flight);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// Display the Product List page
include('page-1.php');