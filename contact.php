<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = "brianmwaura75@gmail.com";
  $subject = "New Message from Contact Form";
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

  if (mail($to, $subject, $message, $headers)) {
    echo "Thank you for your message!";
  } else {
    echo "Sorry, there was an error sending your message.";
  }
}
?>