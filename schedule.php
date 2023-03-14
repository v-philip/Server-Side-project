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
<main>
    <div>
        <h1> Arrival Schedule</h1>
        
        <table class="table">
            <tr>
                <th scope="col">Flight Number</th>
                <th scope="col">Arriving from</th>
                <th scope="col">Arrival Time</th>
            </tr>
            <?php foreach ($airlines as $airline) : ?>
            <tr>
                <td><?php echo $airline['flight_id'];?></td>
                <td><?php echo $airline['airport_id'];?></td>
                <td><?php echo $airline['arrival_time'];?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
<br>
<br>
<br>
    <div>
        <h1>Depature Schedule</h2>
        <table class="table table-dark">
            <tr>
                <th scope="col">Flight Number</th>
                <th scope="col">Departing to</th>
                <th scope="col">Arrival Time</th>
            </tr>
            <tr>
            <?php foreach ($airlines2 as $airlined) : ?>
                <tr>
                    <td><?php echo $airlined['flight_id'];?></td>
                    <td><?php echo $airlined['airport_id'];?></td>
                    <td><?php echo $airlined['departure_time'];?></td>
                </tr>
            <?php endforeach; ?>
            </tr>
        </table>
    </div>
    <a href="page-1.php"  class="btn btn-primary">Back to Home</a>


</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>