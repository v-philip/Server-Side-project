<?php
require_once "header.php"?>
<?php
require_once('database.php');

$queryProducts = 'SELECT * FROM airlines';
$statement = $db->prepare($queryProducts);
$statement->execute();
$airlines = $statement->fetchAll();
$statement->closeCursor();


?>  



<main class="container">
  
<div class="row">
  <h1>
    Click on See schedule to see its schedule
  </h1>
  <br>
  <br>
  <br>

            <!-- <div class="card-deck" > -->
            <?php foreach ($airlines as $airline) : ?>
              <div class="col">
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
            <img  class="card-img-top" src="<?php echo $airline['image_link'];?>">
            <div class = "card-body">
            <h1><?php echo $airline['airline_name']; ?></h1>
                <p><?php echo $airline['airline_id']; ?></p>
                <a  class="btn btn-primary" type="button" href = "schedule.php?subject=<?php echo $airline['airline_id']; ?>"> See Schedule </a>
                <p><?php echo $_SESSION["SelectedAirline"] ?></p>
                <!-- <tr>
                    <td></td>
                    <td><form action="delete_airline.php" method="post">
                        <input type="hidden" name="airline_Id"
                               value="">
                        <input type="submit" value="Delete">
                    </form></td>
                </tr> -->
            </div>
            </div>
            </div>
            <?php endforeach; ?>
            
            
            </div>
            
  <script src="js/bootstrap.bundle.min.js"></script>
</main><!-- /.container -->
    
    
  </body>
</html>
