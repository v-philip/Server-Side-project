<?php
require_once "header.php"?>


<main class="contianer">
<h1>Contact us</h1>
<form method="POST" name="contactform" action="contact-form-handler.php"> 
  <div  class="form-group row">
<p>
<label for='name' class="col-sm-2 col-form-label">Your Name:</label> <br>
<input type="text" name="name">
</p>
<p>
<label for='email' class="col-sm-2 col-form-label">Email Address:</label> <br>
<input type="text" name="email"> <br>
</p>
<p>
<label for='message' class="col-sm-2 col-form-label">Message:</label> <br>
<textarea name="message"></textarea>
</p>
<input type="submit" value="Submit"><br>
</form>
</div>
<script language="JavaScript">
var frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>



</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
