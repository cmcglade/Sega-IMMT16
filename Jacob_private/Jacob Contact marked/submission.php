<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystylesheet.css">
</head>
<!--this page isn't working: if you want to use html isnide your php, you need to put all the tags inside the quote
	surrounding the message.  the p tag outside the quotes below is likely breaking the code-->
<body>
<?php
$FName = $_POST ("FirstName")
$LName = $_POST ("LastName")
$Password= $_POST ("Password")
$Phone = $_POST ("Phone Number")
$Email = $_POST ("Email")
echo <p> "Thank you" $FName $LName. "your isuue has been submitted. <br> I will contact you at "$Email ;
?>
</body>
</html>