<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PORTFOLIO Contact</title>
	<link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="icon" href="../img/favicon.png">
</head>
<body>  

<?php include 'db.php'; ?>  

<header>
    <input href="" name="action" onclick="history.back()" type="submit" value="&#8592;Go back" id="goBack"></input>
            <nav>
                <ul class="nav__links">
                    <li><a href="review.php">Write review</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="../index.php#about">About</a></li>
                </ul>
            </nav>
            <a class="cta" href="contact.php">Contact</a>
    </header>

<div class="background">
  <div class="container">
    <div class="screen">
    <div class="screen-header">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $company = $_POST['company'];
      $message = $_POST['message'];

      $name = htmlspecialchars($name);
      $email = filter_var($email, FILTER_SANITIZE_EMAIL);
      $phone = htmlspecialchars($phone);
      $company = htmlspecialchars($company);
      $message = htmlspecialchars($message);

      $to = "dima.ninja07@gmail.com";
      $subject = "Contact Form Submission";
      $messageBody = "Name: $name\nEmail: $email\nPhone: $phone\nCompany: $company\nMessage: $message";
      $headers = "From: $email";

      if (mail($to, $subject, $messageBody, $headers)) {
        echo '<script>alert("✅Message has been successfully sent.")</script>';

          $stmt = $db->prepare("INSERT INTO contactDB (name, email, phone, company, message) VALUES (?, ?, ?, ?, ?)");
          $stmt->execute([$name, $email, $phone, $company, $message]);

          $id = $db->lastInsertId();
      } else {
          echo "Sorry, there was an error processing your request. Please try again later.";
      }
    } 
?>

</div>
      <div class="contact">
          <span>CONTACT ME</span>
        </div>
      <div class="screen-body">
        <div class="screen-body-item">
        <form method="POST" action="contact.php">
          <div class="app-form">
            <div class="app-form-group">
            <input class="app-form-control" type="text" id="name" name="name" placeholder="Name*" required><br>
            </div>
            <div class="app-form-group">
            <input class="app-form-control" type="email" id="email" name="email" placeholder="Email*" required><br>
            </div>
            <div class="app-form-group">
            <input class="app-form-control" type="number" id="phone" name="phone" placeholder="Phone"><br>
            </div>
            <div class="app-form-group">
            <input class="app-form-control" type="text" id="company" name="company" placeholder="Company (Optional)"><br>
            </div>
            <div class="app-form-group message">
            <input class="app-form-control" type="text" id="message" name="message" placeholder="Message*" required><br>
            </div>
            <div class="app-form-group buttons">
            <input class="app-form-button" type="submit" value="Toevoegen">
            </form>
            <div class="uitslaag">
    
            </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>



</body>
</html>

