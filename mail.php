<?php

echo "<script> alert(\"Email Function Called !\")</script>";
$name = $_POST['ordername'];
$list = $_POST['orderlist'];
$mobile = $_POST['ordermobile'];
$address = $_POST['orderaddress'];

$to = "targetwithaim@gmail.com"; 
$email_from = "nisarg4000@gmail.com";
$email_subject = "New Order Details";
$email_body = "You have recieved an Order From the $name. \n\n" . 
"Here is the Order Details : \n".
"<b>List of Items Ordered</b> : $list \n" .
"<b>Mobile Number of User</b> : $mobile \n" .
"<b>Address of User</b> : $address";
$headers = "From : $email_from";
mail($to, $email_subject, $email_body, $headers);

echo "<script> alert(\"Email Sent !\")</script>";

?>