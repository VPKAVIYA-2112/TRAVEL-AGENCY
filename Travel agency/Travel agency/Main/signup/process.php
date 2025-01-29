<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Set up email
  $to = "kaviyasri.ad22@bitsathy.ac.in"; 
  $subject = "New Mail from Travel Agency";
  $headers = "From: $email\r\n" .
             "Reply-To: $email\r\n" .
             "X-Mailer: PHP/" . phpversion();

  // Compose the email body
  $email_body = "Name: $name\n\n";
  $email_body .= "Email: $email\n\n";
  $email_body .= "Message:\n$message";

  // Send email
  if (mail($to, $subject, $email_body, $headers)) {
    echo "Thank you! Your message has been sent successfully.";
  } else {
    echo "Oops! Something went wrong. Please try again later.";
  }
}
?>
