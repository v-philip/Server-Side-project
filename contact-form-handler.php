<?php
require_once "database.php";
$errors = '';
$myemail = 'D00243412@student.dkit.ie';// <-----Put your DkIT email address here.
if(empty($_POST['name'])  ||
   empty($_POST['email']) ||
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors .= "\n Error: Invalid email format";
}




$headers = "";
// Important: Create email headers to avoid spam folder
$headers .= 'From: '.$myemail."\r\n".
    'Reply-To: '.$myemail."\r\n" .
    'X-Mailer: PHP/' . phpversion();


$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$address = $_POST['address'];

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}


if( empty($errors))
{
        $to = $myemail;
        $email_subject = "Contact form submission: $name";
        $email_body = "You have received a new message. ".
        " Here are the details:\n Name: $name \n Email: $email_address \n 
        Message \n $message
        Address \n $address";

        $queryProducts2 = "Insert into contact_form values ('$email_address', '$name', '$message', '$address') ";
        $db->query($queryProducts2);
        mail($to,$email_subject,$email_body,$headers);
        //redirect to the 'thank you' page
        header('Location: page-1.php');
}




?>
<!DOCTYPE HTML>
<html>
<head>
        <title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->

<?php
require_once(
"header.php"
);
echo nl2br($errors);
echo '<br>
<a href="page-2.php">Go back</a>';
?>
</body>
</html>