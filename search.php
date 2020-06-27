<?php

include("includes/dbconfig.php");

$searchterm = strtoupper($_GET['term']);

$getdata = $database->getReference('inventory')
            ->orderByChild('prodName')
            ->startAt($searchterm)
            ->getValue();

$product_names = array();

foreach($getdata as $key => $row)
{
array_push($product_names,$row['prodName']);
}

echo json_encode($product_names);

?>
