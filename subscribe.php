<?php
   
        
          $to = "theDeUpBlog@gmail.com";
          $subject = "new subscriber";
          $headers = ".$name.";
          $body = ".$email $phone.";
        mail($to,$subject,$headers,$body);

        if(mail($to,$subject,$headers,$body))
        {
        $user = "$email";
        $subject = "Thank You";
        $headers = "From: theDeUpBlog@gmail.com\n";
        $message = "Thank You for Subscribing To theDeUpBlog \nWe Will Not Spam You!\nYou Can Unsubscribe Any Time\n\nRead Best Article at www.theDeUpBlog.in\nContact Us at Any Time http://theDeUpBlog.in/theDeUpBlogmore.html \nor \nmailto theDeUpBlog@gmail.com";
        mail($user,$subject,$message,$headers);

        echo'<h1>Thankyou!</h1>
             <h2>You subscribed successfully</h2>';
        }
        else
        {
          echo '<h1>error while sending your post !</h1>
               <h2>Please try again!</h2>';
        }
      }
     
  else
  {
    echo"error";
  }
    ?> 
<!DOCTYPE html>
<html>
<head>
  <title>Thankyou</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <style type="text/css">
        body
        {
          background-image: url("image/road-3856796_1920.jpg");
          background-size: 100%;
        }
        h1,h2
        {
          text-align: center;
        }
        p
        {
          text-align: center;
          color: #fff;
        }
      </style>
</head>
<body>
  <div class="align-self-center align-item-center">
    <p id="ret_button">
      <a class="nav-link" href="index.html"><button class="btn btn-primary">Return to Homepage</button></a>
    </p>
</div>

 <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>