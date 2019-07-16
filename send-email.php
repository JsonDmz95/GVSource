<?php

if ( isset( $_POST["submit"] ) ) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $company = $_POST["company"];
  $phone_number = $_POST["phone_number"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $country = $_POST["country"];
  $how_help_you = $_POST["how_help_you"];

  $lineBreak = "\n";
  $lineHtml = "<br>";

  $html = "<p style='color=#000;'><b>This is a self-generated message from the Contact Us form.</b></p>".$lineHtml."<p style='color=#000;'>"."<b>Name: </b>".$name."</p>"."<p style='color=#000;'>"."<b>E-mail: </b>".$email."</p>"."<p style='color=#000;'>"."<b>Company: </b>".$company."</p>"."<p style='color=#000;'>"."<b>Phone number: </b>".$phone_number."</p>"."<p style='color=#000;'>"."<b>Address: </b>".$address."</p>"."<p style='color=#000;'>"."<b>City: </b>".$city."</p>"."<p style='color=#000;'>"."<b>Country: </b>".$country."</p>"."<p style='color=#000;'>"."<b>How may we help you?: </b>".$how_help_you."</p>".$lineHtml."<p style='color=#000;'>Regards,</p>"."<p style='color=#000;'><b>GVSource Website</b></p>";

  $text = "This is a self-generated message from the Contact Us form.".$lineBreak."Name: ".$name.$lineBreak."E-mail: ".$email.$lineBreak."Company: ".$company.$lineBreak."Phone number: ".$phone_number.$lineBreak."Address: ".$address.$lineBreak."City: ".$city.$lineBreak."Country: ".$country.$lineBreak."How may we help you?:".$how_help_you.$lineBreak."Regards,".$lineBreak."GVSource Website";


  $to = "info@gvsource.com";
  $from = "website@gvsource.com";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From:" . $from;
  $subject = "GVSource - Website";
  $message = $html;

  $success = mail($to, $subject, $message, $headers);

  if (!$success) {
    // $errorMessage = error_get_last()['message'];
    header("Location: /?notification=error");
    // die();
    exit;
  }

  // echo "Mail Sent.";
  header("Location: /?notification=success");
  // die();
  exit;
}

?>
