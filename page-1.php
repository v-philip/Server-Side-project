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
            <tr>
                <td><?php echo $airline['airline_name']; ?></td>
              
                <td><form action="delete_product.php" method="post">
                    <input type="hidden" name="airline_id"
                           value="<?php echo $movie['airline_id']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
  </div>

</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
