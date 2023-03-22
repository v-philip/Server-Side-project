<?php
require_once "header.php"?>
<br>
<br>


<main class="container bg-light text-dark w-50 p-3">
<h1>Login</h1>
<form method="POST" name="login" action="login.php"> 
<p>
<label  class="form-label" for='email'>Email:</label> <br>
<input type="text" name="email" id="email"  onBlur="email_validation" class="form-control">
<div id="email-error"></div>
</p>
<p>
<label class="form-label"  for='password'>Password:</label> <br>
<input type="password" name="password" id="password"class="form-control"> <br>
<div id="pass-error"></div>
</p>
<p>
</p>
<input type="submit" value="Submit"  class="btn btn-outline-primary"><br>
</form>

</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
    

    <div class="card-footer text-muted">
©--Philip Philip Vadakekala, 2023 
  </div>
  </body>
  <script src = "js/validation.js"></script>
</html>
