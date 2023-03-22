<?php
require_once "header.php"?>
<?php
require_once('database.php');

global $conn;

$queryProducts = "SELECT airline_id from airlines; ";
$statement = $db->prepare($queryProducts);
$statement->execute();
$airlines = $statement->fetchAll();
$statement->closeCursor();

$queryProducts2 = "SELECT airport_id FROM airports; ";
// $statement2 = $db->prepare($queryProducts2);
// $statement2->execute();
// $airlines2 = $statemen2->fetchAll();
// $statement2->closeCursor();
$result = $conn->query($queryProducts2);
$airlines2 = $result;

?>

<main class="container bg-light text-dark w-50 p-3">
<h1>Add Arrivale</h1>
<form method="POST" name="login" action="addArrivalHandler.php"> 
<p>
<label  class="form-label" for='flight_id'>FLIGHT ID :</label> <br>
<input type="text" name="flight_id" id="flight_id"  onBlur="" class="form-control">
</p>
<p>
<label for="country">Airline Id:</label>
<select id="airline_id" name="airline_id" class="form-label"><br>
<option selected="" value="Default">(Please select a id)</option>
<?php foreach ($airlines as $airline) : ?>
<option value="<?php echo $airline['airline_id']; ?>"><?php echo $airline['airline_id']; ?></option>
<?php endforeach; ?>
</select>
</p>
<label for="country">Airport Id:</label>
<select id="airport_id" name="airport_id" class="form-label"><br>
<option id="country" name="airport_id" class="form-label">(Please select a id)</option>
<?php foreach ($airlines2 as $airline2) : ?>
<option value="<?php echo $airline2['airport_id']; ?>"><?php echo $airline2['airport_id']; ?></option>
<?php endforeach; ?>
</select>
<p>
</p>
<input type="submit" value="Submit"  class="btn btn-outline-primary"><br>
</form>
<div class="card-footer text-muted">
©--Philip Philip Vadakekala, 2023 
  </div>

</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
    

    
  </body>
  <script src = "js/validation.js"></script>
</html>

