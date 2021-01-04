<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body>
  <form method="post" action="">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <input type="subject" name="subject" placeholder="Subject" required>
    <textarea  name="message" placeholder="Message" required> </textarea>

    <div class="g-recaptcha" data-sitekey="6LcTsvsZAAAAABVoSSHl9a78hQZ2OoOmrUbDgRDI"></div>

    <input type="submit" name="submit" values="Send Message">
</form>

<div class="status">

  <?php
  if(isset($_POST['submit']))
  {
    $User_name = $_POST['name'];
    $user_email = $_POST['email'];
    $subject = $_POST['message'];
    $user_message = $_POST['message'];

    $email_form ='noreply@chuchietiWebsite.com';
    $email_subject = "Email from your website";
    $email_body = "Name: $User_name.\n".
                  "Subject:$subject";
                  "Email Id: $user_email.\n".
                  "User Message: $user_message.\n";
    
    $to_email = "chuchie_ignacio@yahoo.com";
    $headers = "From: $email_from\r\n";
    $headers .="Reply-To: $user_email\r\n";
    
    $secretkey = "6LcTsvsZAAAAAISl1I7H_DV0LRwFWRj-Zu5gSkTa";
    $responsekey = $_POST['g-recaptcha-response'];
    $UserIP = $_SERVER['REMOTE_ADDR'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$responsekey&remoteip=$UserIP";

    $response = file_get_contents($url);
    $response = json_decode($response);

    if ($response->success)
    {
      mail($to_email,$email_subject,$email_body,$headers);
      echo "Message sent Successfully";
    }
    else
    {
      echo "Invalid Captcha, Please try again";
    }
  }
  ?>

</div>
  
</body>
</html>