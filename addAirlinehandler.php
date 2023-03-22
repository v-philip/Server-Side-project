<?php
require_once('database.php');

// Get IDs
$airline_id = $_POST['airline_id'];
$airline_name = $_POST['airline_name'];
$image_link = $_POST['image_link'];

// Delete the product from the database

    $query = 'INSERT INTO airlines
                 (airline_id, airline_name, image_link)
              VALUES
                 (:airline_id, :airline_name, :image_link)
                 ';
    $statement = $db->prepare($query);
    $statement->bindValue(':airline_id', $airline_id);
    $statement->bindValue(':airline_name', $airline_name);
    $statement->bindValue(':image_link', $image_link);
    $success = $statement->execute();
    $statement->closeCursor();    


// Display the Product List page
include('page-1.php');