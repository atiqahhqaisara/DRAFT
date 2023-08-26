<!DOCTYPE html>
<html>
 <head><title>PHP Mail Sender</title></head>
 <body>
 <?php
 
 # Retrieve the form data
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];
 
 # Check if a $_POST value exists
 # If not use defaults1 if (empty($_POST['email'])){
 $email = "youremailadd@gmail.com";
 }
 if (empty($_POST['subject'])){
 $subject = "PHP Test Email";
 }
 if (empty($_POST['message'])){
 $message = "A quick test from Php Mail";
 }

 # Sends mail and report success or failure
if (mail($email,$subject,$message)) {
 echo "<h4>Thank you for sending email</h4>";
} else {
echo "<h4>Can't send email to $email</h4>";
 }
?>
</body>
</html>