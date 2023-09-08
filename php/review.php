<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PORTFOLIO Review</title>
    <link rel="stylesheet" href="../css/review-style.css">
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
            <a class="cta" href="#">Contact</a>
    </header>
    
<div class="background">
  <div class="container">
    <div class="screen">
    <div class="screen-header">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST["naam"];
    $surname = $_POST["surname"];
    $functie = $_POST["functie"];
    $tekst = $_POST["tekst"];
    
    if (empty($naam) || empty($surname) || empty($functie) || empty($tekst)) {
        echo "Niet alles is ingevuld";
    } else {
        try {
            $stmt = $db->prepare("INSERT INTO portfolioDB (naam, surname, functie, tekst) VALUES (?, ?, ?, ?)");
            $stmt->execute([$naam, $surname, $functie, $tekst]);

            $id = $db->lastInsertId();

            echo "<p>✅Review has been successfully sent. </p>";
            echo "<hr>";
            echo "<p>You sended:</p> 
            <table>
              <tr>
                <td>Name: </td>
                <td>$naam</td>
              </tr>

              <tr>
              <td>Surname</td>
              <td>$surname</td>
            </tr>

            <tr>
              <td>Function: </td>
              <td>$functie</td>
            </tr>

            <tr>
              <td>Review: </td>
              <td>$tekst</td>
            </tr>
            </table>
            <br>Your review ID is: <u>#$id</u></p>";


        } catch (PDOException $e) {
            echo "Fout bij het verzenden naar de database: " . $e->getMessage();
        }
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

