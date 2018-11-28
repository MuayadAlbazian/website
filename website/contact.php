<?php
if (isset($_POST["submit"])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone number'];
  $group = $_POST['group amount'];
  $comments = $_POST['human'];
  $from = 'Demo Contact Form';
  $to = 'muayad925@yahoo.com';
  $subject = 'Message from Contact Demo';

  $body = "From: $name\n E-Mail: $email\n Phone Number: $phone\n Group Amount: $group\n Comments: $comments";

  //check if name is entered
  if(!$_POST['name']) {
    $errName = 'Please enter your name';
  }

  // check if email has been entered and its valid

  if(!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errEmail = 'Please enter a valid email address';
  }

  // phone number
  if(!$_POST['phone']) {
    $errPhone = 'Please enter your phone number';
  }

  // group
  if(!$_POST['group']) {
    $errGroup = 'Please enter a valid group amount';
  }

  // send email if no errors
  if (!$errName && !$errEmail && !$errPhone && !$errGroup) {
    if(mail ($to, $subject, $body, $from)) {
      $result='<div class = "alert alert-success"> Thank You! We will be in touch!</div>';
    } else {
      $result='<div class="alert alert-danger"> Sorry there was an error sending your request, please try again later!';

    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Group Reservations</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

	<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">HOME</a></li>
        <li><a href="#band">ABOUT US</a></li>
        <li><a href="https://www.facebook.com/Mudrakerscafe/photos/a.704974709660069.1073741828.704548359702704/781562922001247/?type=3&theater">MENU</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="#contact">GROUP RESERVATIONS</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container text-center">
  <h3>Mudrakers Cafe</h3>

  <p> Mudrakers Cafe</p>

</div>

<div class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em></em></p>
  <div class="row test">
    <div class="col-md-4">
      <p>Have a question?</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Address: 2801 Telegraph Ave, Berkeley, CA 94705</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: (510) 649-7315</p>

    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          <?php echo "<p class='text-danger'>$errName</p>;?>
          "
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          <?php echo "<p class='text-danger'>$errEmail</p>;?>
        </div>
      </div>
      <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="phone number" name="phone number" placeholder="Phone Number" type="Phone Number" required>
          <?php echo "<p class='text-danger'>$errPhone</p>;?>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="Group Amount" name="Group Amount" placeholder="Group Amount" type="Group Amount" required>
          <?php echo "<p class='text-danger'>$errGroup</p>;?>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div> 
    </div>
  </div>
</div>


</body>


</html>
