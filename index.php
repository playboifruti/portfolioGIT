<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/left-info.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="icon" href="img/favicon.png">
    <title>PORTFOLIO - Dima Pavlov</title>
</head>
<body>

<?php include 'php/db.php'; ?>
<div class="content">
    <div class="left-bar">
        <div class="small-info">
            <img src="img/circel.png" alt="foto" id="self-foto">
            <h3>Dima Pavlov</h3>
            <p>Back-end Developer</p>
            <p>Database</p>
        </div>

        <div class="main-info">
        <?php
          $dob = "2004-09-07";

          $currentDate = new DateTime();
          $currentYear = $currentDate->format("Y");

          $dobDate = new DateTime($dob);
          $dobYear = $dobDate->format("Y");

          $age = $currentYear - $dobYear;
        ?>
            <table class="table-basic-info">
                <tr>
                    <td class="table-quistion">Residednce:</td>
                    <td class="table-antword">Nedetherlands</td>
                </tr>
                <tr>
                    <td class="table-quistion">City:</td>
                    <td class="table-antword">Voorschoten</td>
                </tr>
                <tr>
                    <td class="table-quistion">Age:</td>
                    <td class="table-antword"> <?php echo $age; ?> </td>
                </tr>
            </table>

            <hr class="hr">

            <div class="language">
                <div class="flex-wrapper">
                    <div class="single-chart">
                      <svg viewBox="0 0 36 36">
                        <path class="circle-bg"
                          d="M18 2.0845
                            a 15.9155 15.9155 0 0 1 0 31.831
                            a 15.9155 15.9155 0 0 1 0 -31.831"
                        />
                        <path class="circle"
                          stroke-dasharray="80, 100"
                          d="M18 2.0845
                            a 15.9155 15.9155 0 0 1 0 31.831
                            a 15.9155 15.9155 0 0 1 0 -31.831"
                        />
                        <text x="18" y="20.35" class="percentage"> 80%</text>
                      </svg>
                      English
                    </div>
                    
                    <div class="single-chart">
                    <svg viewBox="0 0 36 36">
                        <path class="circle-bg"
                          d="M18 2.0845
                            a 15.9155 15.9155 0 0 1 0 31.831
                            a 15.9155 15.9155 0 0 1 0 -31.831"
                        />
                        <path class="circle"
                          stroke-dasharray="100, 100"
                          d="M18 2.0845
                            a 15.9155 15.9155 0 0 1 0 31.831
                            a 15.9155 15.9155 0 0 1 0 -31.831"
                        />
                        <text x="18" y="20.35" class="percentage">100%</text>
                      </svg>
                      Russian
                    </div>
                  
                    <div class="single-chart">
                    <svg viewBox="0 0 36 36">
                        <path class="circle-bg"
                          d="M18 2.0845
                            a 15.9155 15.9155 0 0 1 0 31.831
                            a 15.9155 15.9155 0 0 1 0 -31.831"
                        />
                        <path class="circle"
                          stroke-dasharray="90, 100"
                          d="M18 2.0845
                            a 15.9155 15.9155 0 0 1 0 31.831
                            a 15.9155 15.9155 0 0 1 0 -31.831"
                        />
                        <text x="18" y="20.35" class="percentage">90%</text>
                      </svg>
                      Netherlands
                    </div>
                  </div>
            </div>

            <hr class="hr">

            <div class="program-languages">
                <table class="table-procents"><tr><td>HTML</td><td class="table-procents-right">90%</td></tr></table>
                <hr id="html-procent">
                <table class="table-procents"><tr><td>CSS</td><td class="table-procents-right">70%</td></tr></table>
                <hr id="css-procent">
                <table class="table-procents"><tr><td>JavaScript</td><td class="table-procents-right">75%</td></tr></table>
                <hr id="js-procent">
                <table class="table-procents"><tr><td>PHP</td><td class="table-procents-right">85%</td></tr></table>
                <hr id="php-procent">
                <table class="table-procents"><tr><td>C#</td><td class="table-procents-right">60%</td></tr></table>
                <hr id="cSharp-procent">
            </div>  
        </div>
    </div>

    <header>
            <nav>
                <ul class="nav__links">
                    <li><a href="php/review.php">Write review</a></li>
                    <li><a href="php/projects.php">Projects</a></li>
                    <li><a href="php/about.php">About</a></li>
                </ul>
            </nav>
            <a class="cta" href="php/contact.php">Contact</a>
    </header>

    <div class="main">
        <div class="header">
                <img src="img/bg.jpeg" alt="mountain" style="width:100%">
                <div class="top-left">Discover my Amazing <br>Art Space!</div>
                <div class="typing"></div> 
                <a href="#myprojects" class="button">CHECK OUT MY PROJECTS</a>  
                <a href="php/history.php" class="button-under">MY HISTORY</a> 
                <!-- <a href="file/CVdima.jpg" download="file/CVdima.jpg" id="cvButton">Dowload my CV</a> -->
        </div>

        <div class="column-exp">
          <div class="column-exp-item">
            <p class="column-exp-text"><span class="column-exp-number">2+ </span>Years Experience</p>
          </div>
          <div class="column-exp-item">
            <p class="column-exp-text"><span class="column-exp-number">15 </span>Completed Projects</p>
          </div>
          <div class="column-exp-item">
            <p class="column-exp-text"><span class="column-exp-number">10+ </span>Happy customers</p>
          </div>
        </div>

        <h2 id="myprojects" name="myprojects">My Projects</h2>
        <div class="card-container">
          <div class="card">
            <h3 class="card-title">Web Development</h3>
            <p class="card-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste harum excepturi id ducimus facere autem dignissimos! Doloribus placeat voluptates soluta?</p>
            <a href="php/projects.php#webDevelopment" class="card-link">CHECK OUT  ></a>
          </div>
          <div class="card">
            <h3 class="card-title">Web Design</h3>
            <p class="card-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt facilis consequuntur illo modi. Eaque et perferendis cumque facilis sequi animi.</p>
            <a href="php/projects.php#webDesign" class="card-link">CHECK OUT  ></a>
          </div>
          <div class="card">
            <h3 class="card-title">Web Security</h3>
            <p class="card-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro fuga aperiam rerum sed in maiores, quos consequatur ad eveniet maxime?</p>
            <a href="php/projects.php#webSecurity"" class="card-link">CHECK OUT  ></a>
          </div>
          <div class="card">
            <h3 class="card-title">Databases</h3>
            <p class="card-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati ea eius magni adipisci animi recusandae eligendi eveniet eaque, eos dicta.</p>
            <a href="php/projects.php#data" class="card-link">CHECK OUT  ></a>
          </div>
          <div class="card">
            <h3 class="card-title">Game Devalopment</h3>
            <p class="card-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error placeat magni odio dolorem? Eius nam rem dolorem quaerat nisi voluptas?</p>
            <a href="php/projects.php#gameDevalopment" class="card-link">CHECK OUT  > </a>
          </div>
          <div class="card">
            <h3 class="card-title">My Code Snipets</h3>
            <p class="card-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia praesentium doloribus minima dolore fugit sit perferendis ipsum, est voluptate odio!</p>
            <a href="php/projects.php#codeSnipets" class="card-link">CHECK OUT  ></a>
          </div>
        </div>
      
        <h2 id="reviews-text">My reviews</h2>
        <div class="reviews-container">
        <?php
          try {
            $stmt = $db->query("SELECT id, naam, surname, functie, tekst FROM portfolioDB");
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch(PDOException $e) {
            echo "Fout bij het ophalen van gegevens uit de database: " . $e->getMessage();
          }
        ?>
        <?php foreach ($results as $row): ?>
              <div class="reviews">
              <h3 class="user-review-name"><?php echo $row['naam'] . ' ' . $row['surname']; ?></h3>
              <p class="user-review-function"><?php echo $row['functie']; ?></p>
              <p class="review-tekst"><?php echo $row['tekst']; ?></p>
              </div>
              
         <?php endforeach; ?>


        </div>
        <div class="scroll-buttons">
          <button id="scroll-left" class="scroll-button"><</button>
          <button id="scroll-right" class="scroll-button">></button>
        </div>

        <div class="aboutMe">

        </div>

        <div class="footer">
          <div class="footer-float">
            <p>© 2023 All Rights Reserved.</p> 
            <p>Email: dima.ninja07@gmail.com</p>
          </div>
        </div> 
    </div>
 </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" referrerpolicy="no-referrer"></script>    
<script src="index.js"></script>
</body>
</html> 