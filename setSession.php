<?php
$product_id = filter_input(INPUT_POST, 'airline_id', FILTER_VALIDATE_INT);
$_SESSION["SelectedAirline"] = $product_id;
echo $_SESSION["SelectedAirline"];
echo $product_id ;
require_once  "schedule.php" ;
$poda =$_POST[airline_id];
echo $product_id ;
echo $poda;
echo $poda;