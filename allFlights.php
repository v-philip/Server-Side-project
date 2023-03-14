<?php
require_once "header.php"?>
<?php
require_once('database.php');
$fff= $_GET["subject"]; 

$conn = mysqli_connect("localhost","root","","test2");

$queryProducts = "SELECT a.flight_id, a.arrival_time, a.airport_id FROM arrival_schedule a JOIN
flights f ON a.flight_id=f.flight_id 
JOIN airlines ar on f.airline_id= ar.airline_id WHERE ar.airline_id = '$fff'; ";
$statement = $db->prepare($queryProducts);
$statement->execute();
$airlines = $statement->fetchAll();
$statement->closeCursor();

$queryProducts2 = "SELECT d.flight_id, d.departure_time, d.airport_id FROM departure_schedule d JOIN
flights f ON d.flight_id=f.flight_id 
JOIN airlines ar on f.airline_id= ar.airline_id WHERE ar.airline_id = '$fff'; ";
// $statement2 = $db->prepare($queryProducts2);
// $statement2->execute();
// $airlines2 = $statemen2->fetchAll();
// $statement2->closeCursor();
$result = $conn->query($queryProducts2);
$airlines2 = $result;

?> 