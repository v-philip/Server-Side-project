<?php
require_once "header.php"?>


<main class="contianer bg-light text-dark w-50 p-3 mx-auto">
<h1>Feedback</h1>
<form method="POST" name="contactform" action="contact-form-handler.php">

<label for="username">Name:</label>
<input type="text" name="username" id="username" class="form-control" size="50" onBlur="username_validation();" /><span id="name_err"></span></li>
<label for="address">Address:</label>
<input type="text" name="address" id="address"class="form-control" size="50" /><span id="add_err"></span></li>
<label for="country">Country:</label>
<select id="country" name="country"class="form-control" onBlur="country_validation();">
<option selected="" value="Default">(Please select a country)</option>
<option value="--">none</option>
<option value="AF">Australia</option>
<option value="AL">Canada</option>
<option value="DZ">India</option>
<option value="AS">Russia</option>
<option value="AD">USA</option>
</select><span id="country_err"></span>
<label for="zip">ZIP Code:</label>
<input class="form-control" type="text" name="zip" id="zip" onBlur="zip_validation();" /><span id="zip_err"></span>
<label  for="email">Email:</label>
<input class="form-control" type="text" name="email" id="email" size="50" onBlur="email_validation();"/><span id="email_err"></span>
<label  for="desc">Message:</label>
<textarea  class="form-control" name="desc" id="desc"></textarea>
<input  class="form-control" type="submit" name="submit" value="Submit" />

</form>
<div class="card-footer text-muted">
©--Philip Philip Vadakekala, 2023 
  </div>

<script language="JavaScript">
var frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>



</main><!-- /.container -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src = "validation.js"></script>
  </body>
</html>
