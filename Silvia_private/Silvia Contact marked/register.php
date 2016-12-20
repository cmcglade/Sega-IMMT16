<?php

$lastname = $_POST["LastName"];
$firstname = $_POST["FirstName"];
$phonenumber= $_POST["PhoneNumber"];
$email = $_POST["Email"];
$username = $_POST["Username"];
$password = $_POST["Password"];
$description = $_POST["Description"];

echo "Hello ", $firstname, $lastname, "! Thank you for submitting your information. You will be contacted at ", $email, " or ", $phonenumber, " regarding " , $description, " by the end of the week!";

?>