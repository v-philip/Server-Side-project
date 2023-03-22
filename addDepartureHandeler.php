<?php
require_once('database.php');

// Get IDs
$flight_id = $_POST['flight_id'];
$airline_id = $_POST['airline_id'];
$airport_id = $_POST['airport_id'];

// Delete the product from the database

    $query = 'INSERT INTO flights
                 (flight_id, airline_id)
              VALUES
                 (:flight_id, :airline_id);
                 ';
    $statement = $db->prepare($query);
    $statement->bindValue(':flight_id', $flight_id);
    $statement->bindValue(':airline_id', $airline_id);
    $success = $statement->execute();
    $statement->closeCursor(); 
    
    $query2 = 'INSERT INTO departure_schedule
                 (flight_id, airport_id)
              VALUES
                 (:flight_id, :airport_id);
                 ';
    $statement2 = $db->prepare($query2);
    $statement2->bindValue(':flight_id', $flight_id);
    $statement2->bindValue(':airport_id', $airport_id);
    $success2 = $statement2->execute();
    $statement2->closeCursor();   


// Display the Product List page
include('allFlights.php');