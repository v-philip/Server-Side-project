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


<?php
// Set session variables

$_SESSION["SelectedAirline"] = "";
echo "Session variables are set.";
?>
<main class="container">
  

            <div class="card-group" style = "display :flex">
            <?php foreach ($airlines as $airline) : ?>
              
            <div class="card"  style="width: 18rem;">
            <img  class="card-img-top" src="<?php echo $airline['image_link'];?>">
            <div class = "card-body">
            <h1><?php echo $airline['airline_name']; ?></h1>
                <p><?php echo $airline['airline_id']; ?></p>
                <a  class="btn btn-primary" type="button" href = "schedule.php?subject=<?php echo $airline['airline_id']; ?>&web=W3schools.com"> See more </a>
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
            
            <?php endforeach; ?>
            </div>
            
  
  <script src="js/bootstrap.bundle.min.js"></script>
</main><!-- /.container -->
    
    
  </body>
</html>
