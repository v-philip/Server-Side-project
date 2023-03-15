<?php
require_once "header.php"?>
<br>
<br>



<main class="container bg-light text-dark w-50 p-3">
<h1>Login</h1>
<form method="POST" name="login" action="login.php"> 
<p>
<label  class="form-label" for='email'>Email:</label> <br>
<input type="text" name="email" id="form1Example1" class="form-control">
</p>
<p>
<label class="form-label"  for='password'>Password:</label> <br>
<input type="text" name="password" id="form1Example1" class="form-control"> <br>
</p>
<p>
</p>
<input type="submit" value="Submit"  class="btn btn-outline-primary"><br>
</form>

</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
