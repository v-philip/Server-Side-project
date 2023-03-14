<?php
require_once "header.php"?>

<main class="container">
<h1>Contact us</h1>
<form method="POST" name="login" action="login.php"> 
<p>
<label for='name'>Email:</label> <br>
<input type="text" name="name">
</p>
<p>
<label for='email'>Password:</label> <br>
<input type="text" name="email"> <br>
</p>
<p>
<label for='message'>Message:</label> <br>
<textarea name="message"></textarea>
</p>
<input type="submit" value="Submit"><br>
</form>

</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
