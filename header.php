


<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Starter Template · Bootstrap v5.0</title>

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="mystyle.css" rel="stylesheet">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
      <div class="container">
        <a class="navbar-brand" >Dublin Airport </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </ul>
          <span class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="page-1.php">Airline</a>
              </li>
              <?php if(empty($_SESSION['user'])){echo
              '<li class="nav-item">
                <a class="nav-link" aria-current="page" href="page-2.php">Feedback</a>
              </li>';
            }
            else{null;}
            ?>
              <!-- <li class="nav-item">
                <a class="nav-link" aria-current="page" href="page-3.php">Login</a>
              </li> -->
              <?php if(!empty($_SESSION['user'])){echo
              '<li class="nav-item">
                <a class="nav-link" aria-current="page" href="logout.php">logout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="allFlights.php">All Flights</a>
              </li>';
            }
            else{echo'<li class="nav-item">
              <a class="nav-link" aria-current="page" href="page-3.php">Login</a>
            </li>';}
            ?>

            </ul>
          </span>
        </div>
      </div>
    </nav>