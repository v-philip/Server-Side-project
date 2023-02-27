
<?php
require_once "header.php"?>
<?php
require_once('database.php');

$queryProducts = 'SELECT * FROM movies';
$statement = $db->prepare($queryProducts);
$statement->execute();
$movies = $statement->fetchAll();
$statement->closeCursor();
?>
<main class="container">
  <div class="starter-template text-center">
    <h1>Bootstrap starter template</h1>
    <section>
        <!-- display a table of products -->
        <table>
            <tr>
                <th>title</th>
                <th>Director</th>
                <th>Age Rating</th>
                <th>Delete</th>
            </tr>

            <?php foreach ($movies as $movie) : ?>
            <tr>
                <td><?php echo $movie['title']; ?></td>
                <td><?php echo $movie['director']; ?></td>
                <td class="right"><?php echo $movie['age_rating']; ?></td>
                <td><form action="delete_product.php" method="post">
                    <input type="hidden" name="movie_Id"
                           value="<?php echo $movie['movie_Id']; ?>">
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
