<html>
<head>
<title>Confirmation Page of Web Form</title>
</head>
<h1>Confirmation Page of Customer Info</h1>

<p>Thank you for submitting this form. 

<p>We have successfully received it. 

<p>Below is a summary of the information you provided.<br><br>  
<?php
echo 'First Name: ' . $_POST ["firstName"] . '<br>';
echo 'Last Name: ' . $_POST ["lastName"] . '<br>';
echo 'Email Address: ' . $_POST ["email"] . '<br>';
echo 'Phone Number: ' . $_POST ["phone"] . '<br>'; 
echo 'Order Number: ' . $_POST ["orderNumber"] . '<br>';
echo 'Shipping: ' . $_POST ["shipping"] . '<br>';
echo 'Delivery Noted: ' . $_POST ["delNotes"];
?>
