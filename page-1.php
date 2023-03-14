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
  <div class="starter-template text-center">
  <table>
            <tr>
                <th>Airline name</th>
                
            </tr>

            <?php foreach ($airlines as $airline) : ?>
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $airline['image_link'];?>" alt="logo" width="500" height="600">
            <ul>
                <li><?php echo $airline['airline_name']; ?></li>
                <li><?php echo $airline['airline_id']; ?></li>
                <input><form action="delete_airline.php" method="post">
                        <input type="hidden" name="airline_Id"
                               value="<?php echo $airline['airline_Id']; ?>">
                        <input   type="submit" value="Delete">
                    </form></li>
                <!-- <tr>
                    <td></td>
                    <td><form action="delete_airline.php" method="post">
                        <input type="hidden" name="airline_Id"
                               value="">
                        <input type="submit" value="Delete">
                    </form></td>
                </tr> -->
            </div>
            <?php endforeach; ?>
        </table>
  </div>

</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
