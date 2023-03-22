<?php
require_once "header.php"?>
<?php
require_once('database.php');
 

$conn = mysqli_connect("localhost","root","","test2");

$queryProducts = "SELECT a.flight_id, a.arrival_time, a.airport_id, ar.airline_name, ar.airline_id FROM arrival_schedule a JOIN
flights f ON a.flight_id=f.flight_id 
JOIN airlines ar on f.airline_id= ar.airline_id; "; 
$statement = $db->prepare($queryProducts);
$statement->execute();
$airlines = $statement->fetchAll();
$statement->closeCursor();


$queryProducts2 = "SELECT d.flight_id, d.departure_time, d.airport_id, ar.airline_name, ar.airline_id FROM departure_schedule d JOIN
flights f ON d.flight_id=f.flight_id 
JOIN airlines ar on f.airline_id= ar.airline_id; "; 

$result = $conn->query($queryProducts2);
$airlines2 = $result;

?> 

<main class="contianer">
    <div class="container">
        <h1> Arrival Schedule</h1>
        
        <table  class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Airline Name </th>
                <th scope="col">Airline code </th>
                <th scope="col">Flight number </th>
                <th scope="col">Airport </th>
                <th scope="col">Delete </th>
                
            </tr>
            </thead>
            <tbody>
            <?php foreach ($airlines as $airline) : ?>
                
            <tr>
                <td><?php echo $airline['airline_name'];?></td>
                <td><?php echo $airline['airline_id'];?></td>
                <td><?php echo $airline['flight_id'];?></td>
                <td><?php echo $airline['airport_id'];?></td>
                <td>
                <a  class="btn btn-primary" type="button" href = "delete_arrival.php?flight_id=<?php echo $airline['flight_id']; ?>"> Delete </a>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>


        <h1> departure_schedule</h1>
        <table  class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Airline Name </th>
                <th scope="col">Airline code </th>
                <th scope="col">Flight number </th>
                <th scope="col">Airport </th>
                <th scope="col">Delete </th>
                
            </tr>
            </thead>
            <tbody>
            <?php foreach ($airlines2 as $airline) : ?>
                    
            <tr>
                <td><?php echo $airline['airline_name'];?></td>
                <td><?php echo $airline['airline_id'];?></td>
                <td><?php echo $airline['flight_id'];?></td>
                <td><?php echo $airline['airport_id'];?></td>
                <td>
                <a  class="btn btn-primary" type="button" href = "delete_departure.php?flight_id=<?php echo $airline['flight_id']; ?>"> Delete </a>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<a href="page-1.php"  class="btn btn-primary">Back to Home</a>
</div>
<div class="card-footer text-muted">
©--Philip Philip Vadakekala, 2023 
  </div>