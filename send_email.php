<?php
if (isset($_POST['submit'])) {
  // Get form inputs
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Email subject
  $subject = "New Message from $name";

  // Email body
  $body = "Name: $name\n";
  $body .= "Email: $email\n";
  $body .= "Message: $message\n";

  // Set the recipient email address
  $to = "kon.lipenga@gmail.com";

  // Set additional headers
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Failed to send email. Please try again later.";
  }
}
?>
