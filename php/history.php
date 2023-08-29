<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/history.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/left-info.css">
    <link rel="stylesheet" href="../css/header.css">


    <title>Document</title>
</head>
<body>

<div class="content">
    <div class="left-bar">
        <div class="small-info">
            <img src="../img/circel.png" alt="foto" id="self-foto">
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


<div class="main">
    <header>
    <input href="" name="action" onclick="history.back()" type="submit" value="&#8592;Go back" id="goBack"></input>
            <nav>
                <ul class="nav__links">
                    <li><a href="review.php">Write review</a></li>
                    <li><a href="../index.php#myprojects">Projects</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </nav>
            <a class="cta" href="#">Contact</a>
    </header>

<div class="row">
  <div class="column">
    <h2>Education</h2>
    <div class="card">
      <div class="space-float">
        <h3 class="place">International Lyceum №51</h3>
        <p id="datum"><span>sep 2011 - may 2016</span></p>
      </div>
      <p class="function">Student</p>
      <p class="description">My 5 school years were marked by an intense focus on math and English, equipping me with vital skills for future success. </p>
    </div>

    <div class="card">
      <div class="space-float">
        <h3 class="place">International School Katwijk</h3>
        <p id="datum"><span>sep 2016 - may 2018</span></p>
      </div>
      <p class="function">Student</p>
      <p class="description">At these school I have learned only Dutch for 2 years. There were also other leason such as math. </p>
    </div>
    
    <div class="card">
        <div class="space-float">
          <h3 class="place">Fioretti Collage Hillegom</h3>
          <p id="datum"><span>sep 2018 - may 2022</span></p>
        </div>
        <p class="function">Student</p>
        <p class="description">In last 2 years I choose for ICT. I have learned how to use Microsoft Office programs and how to use Adobe programs. </p>
    </div>

    <div class="card">
        <div class="space-float">
          <h3 class="place">Grafish Lyceum Rotterdam</h3>
          <p id="datum"><span>aug 2022 - may 2025</span></p>
        </div>
        <p class="function">Student</p>
        <p class="description">Studying software development I have learned coding, algorithms, problem-solving, and teamwork.  </p>
    </div>

  </div>
  <div class="column">
    <h2>Work History</h2>
    <div class="card">
      <div class="space-float">
        <h3 class="place">Bristol</h3>
        <p id="datum"><span>Oct 2021 - Dec 2022</span></p>
      </div>
      <p class="function">Helper</p>
      <p class="description">My tasks were to clear the store and make sure that everything stands on a right place.</p>
    </div>

    <div class="card">
      <div class="space-float">
        <h3 class="place">Jumbo Voorschoten</h3>
        <p id="datum"><span>Nov 2022 - Jun 2022</span></p>
      </div>
      <p class="function">Stock clerk</p>
      <p class="description">Stock clerks manage inventory, restock shelves, record item data, and assist customers.</p>
    </div>

    <div class="card">
      <div class="space-float">
        <h3 class="place">Saffier</h3>
        <p id="datum"><span>Jul 2023 - Jan 2024</span></p>
      </div>
      <p class="function">Service</p>
      <p class="description">I worked in kitchen and living room. I made food and drinks for the elderly who came in. Some elderly people couldn't move or eat themselves, so I had to help them. Cozy talks and games with the elderly made me happy.</p>
    </div>

  </div>
</div>


  <div class="footer">
      <div class="footer-float">
      <p>© 2023 All Rights Reserved.</p>
      <p>Email: dima.ninja07@gmail.com</p>
      </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" referrerpolicy="no-referrer"></script>    
<script src="index.js"></script>
</body>
</html>