<?php
require_once "header.php"?>


<main class="contianer">
<h1>Feedback</h1>

<form method="POST" name="contactform" action="contact-form-handler.php" class="mx-auto" > 
  <div  class="form-group row  w-50 p-3" style="background-color: #eee">
    <p>
    <label for='name' class="form-label">Your Name:</label> <br>
    <input type="text" name="name" id="form1Example1" class="form-control" >
    </p>
    <p>
    <label for='email'  class="form-label">Email Address:</label> <br>
    <input type="text" required name="email" id="form1Example1" class="form-control"> <br>
    </p>
    <p>
    <label for='message'  class="form-label">Message:</label> <br>
    <textarea name="message" id="form1Example1" class="form-control"></textarea>
    </p>
<input type="submit" value="Submit" class="btn btn-outline-primary"><br>
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
