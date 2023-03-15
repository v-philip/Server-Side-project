<?php

require_once('database.php');

$errors='';
if(empty($_POST['email']) ||
   empty($_POST['password']))
{
    $errors .= "\n Error: all fields are required";
}

if(empty($_POST['email']))
{
    $errors .= "\n Error: email is required";
}

if(empty($_POST['password']))
{
    $errors .= "\n Error: password is required";
}

if( empty($errors))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM admin WHERE email = '$email' AND pass = '$password'";
    $statement = $db->prepare($query);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();
    if($user != null)
    {
        session_start();
        $_SESSION['user'] = $user;
        header('Location: page-1.php');
    }
    else
    {
        $errors .= "\n Error: Invalid email or password";

    }
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
<a href="page-3.php">Go back</a>';
?>
</body>
</html>