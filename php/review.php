

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PORTFOLIO Review</title>
	<link rel="stylesheet" href="../css/review-style.css">
    <link rel="icon" href="../img/favicon.png">
</head>
<body>  
<?php

include 'db.php'; // Make sure this file includes the database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $naam = $_POST['naam'];
    $surname = $_POST['surname'];
    $functie = $_POST ['functie'];
    $tekst = $_POST['tekst'];
}

?>  
<div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
      <?php 
          if (empty($naam) || empty($surname) || empty($functie) || empty($tekst)) {
            echo "Niet alles is ingevuld";
        } else {
            try {
                $stmt = $db->prepare("INSERT INTO portfolioDB (naam, surname, functie, tekst) VALUES (?, ?, ?, ?)");
                $stmt->execute([$naam, $surname, $functie, $tekst]);
    
                $id = $db->lastInsertId();
    
                echo "<p>Data is succesvol naar de database verzonden. </p>";
                echo "<p>Je hebt gestuurd: $naam, $surname, $functie, $tekst <br>Jouw review id is: $id</p>";
                echo "<p>Heeft u fout gedaan bij het schrijven van een review? Dan kunt u <a href='changeReview.php' id='linkToChange'>hier</a> details veranderen.</p>";
            } catch(PDOException $e) {
                echo "Fout bij het verzenden naar de database: " . $e->getMessage();
            }
        
        }
      ?>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>Write your</span>
            <span>Review</span>
          </div>
        </div>
        <div class="screen-body-item">
        <form method="POST" action="">
          <div class="app-form">
            <div class="app-form-group">
            <input class="app-form-control" type="text" id="naam" name="naam" placeholder="Name"><br>
            </div>
            <div class="app-form-group">
            <input class="app-form-control" type="text" id="surname" name="surname" placeholder="Surname"><br>
            </div>
            <div class="app-form-group">
            <!-- <input class="app-form-control" type="text" id="functie" name="functie" placeholder="Function"><br> -->
            <select class="app-form-control" id="functie" name="functie" >
    <option value="" disabled selected>Select Function</option>
    <option value="Customer">Сustomer</option>
    <option value="Teacher">Teacher</option>
    <option value="Employer">Employer</option>  
</select>


            </div>
            <div class="app-form-group message">
            <input class="app-form-control" type="text" id="tekst" name="tekst" placeholder="Your review"><br>
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

