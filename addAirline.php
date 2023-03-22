<?php
require_once "header.php"?>



<main class="container bg-light text-dark w-50 p-3">
<h1>ADD AIRLINE</h1>
<form method="POST" name="login" action="addAirlinehandler.php"> 
<p>
<label  class="form-label" for='airline_name'>Ailrine name :</label> <br>
<input type="text" name="airline_name" id="airline_name"  onBlur="" class="form-control">
</p>
<p>
<label class="form-label"  for='airline_id'>Airline id:</label> <br>
<input type="iext" name="airline_id" id="airline_id"class="form-control"> <br>
<div id="pass-error"></div>
</p>
<label class="form-label"  for='image_link'>Image Link </label> <br>
<input type="text" name="image_link" id="image_link"class="form-control"> <br>
<div id="pass-error"></div>
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
