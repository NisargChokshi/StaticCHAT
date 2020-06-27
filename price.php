<?php

include("includes/dbconfig.php");

$items = json_decode($_POST['itemList']);

$price = array();

for($x=0; $x<count($items)-1; $x++){
    $getdata = $database->getReference('inventory')
        ->orderByChild('prodName')
        ->equalTo(ltrim($items[$x]))
        ->getValue();


foreach($getdata as $key => $row)
{
    array_push($price,$row['prodSalRate']);
}

}

echo json_encode($price);

?>
