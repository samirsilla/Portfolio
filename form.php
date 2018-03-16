<?php

// define variables and set to empty values
$name_error = $email_error = $message_error = $display_error = "";
$name = $email = $message = $success = "";

// form submitted with post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $display_error = "Please provide a name";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $display_error = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["email"])) {
    $display_error = "Please provide an email address";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $display_error = "Invalid email format"; 
    }
  }

  if (empty($_POST["message"])) {
    $display_error = "Please provide a message";
  } else {
    $message = test_input($_POST["message"]);
  }

  if($display_error == '') {
    $headers = "From: ssamirmuratovic@gmail.com";
      $message_body = '';
      unset($_POST['submit']);
      foreach ($_POST as $key => $value){
          $message_body .=  "$key: $value\n";
      }
      
      $to = 'ssamirmuratovic@gmail.com';
      $mail_subject = 'Contact Form Submit';
      if (mail($to, $mail_subject, $message_body, $headers)){
          $success = "Thank you, " . $name . ". Your message was received!";
          $display_error = $success;
          $name = $email = $message = '';
      }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>