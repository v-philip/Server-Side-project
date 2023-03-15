<?php
require_once('database.php');

// Get IDs
$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);

// Delete the product from the database
if ($product_id != false) {
    $query = 'DELETE FROM flights :
              WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// Display the Product List page
include('page-1.php');