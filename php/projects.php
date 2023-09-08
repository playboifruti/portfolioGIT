<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/left-info.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/projectsStyle.css">
    <link rel="icon" href="../img/favicon.png">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css”>
    <title>PROJECTS - Dima Pavlov</title>
</head>
<body>

<?php include 'db.php'; ?>

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

    <div class="main">
      <div class="projects">      
        <div class="projectSection" id="webDevelopment">
          <h1 class="title">Web Development Projects</h1>
                <div class="card-container">
                <?php
                $xP = 'No projects uploaded now';

                try {
                    $stmt = $db->query("SELECT id, projectName, projectDescription, projectType, link, linkGit, picture FROM addProjectDB WHERE projectType = 'webDevelopment'");
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                } catch (PDOException $e) {
                    echo "Fout bij het ophalen van gegevens uit de database: " . $e->getMessage();
                }
                ?>
                  <?php if (count($results) > 0): ?>
                    <?php foreach ($results as $row): ?>
                        <div class="card">
                            <img src="<?php echo $row['picture']; ?>" alt="Card Image" class="projectImg">
                            <h3 class="projectName"><?php echo $row['projectName']; ?></h3>
                            <p class="projectDiscription"><?php echo $row['projectDescription']; ?></p>
                            <a class="projectLink" href="<?php echo $row['link']; ?>">Link for project</a>
                            <a class="projectLink" href="<?php echo $row['linkGit']; ?>">Link for GIT</a>
                        </div>
                    <?php endforeach; ?>

                    <?php else: ?>
                      <p class="xP"><?php echo $xP; ?></p>
                    <?php endif; ?>
            </div>
          </div>
    <div class="projects">     
      <div class="projectSection" id="webDesign">
        <h1 class="title">Web Design Project</h1>
          <div class="card-container">
          <?php
                try {
                    $stmt = $db->query("SELECT id, projectName, projectDescription, projectType, link, picture FROM addProjectDB WHERE projectType = 'webDesign'");
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                } catch (PDOException $e) {
                    echo "Fout bij het ophalen van gegevens uit de database: " . $e->getMessage();
                }
                ?>
                  <?php if (count($results) > 0): ?>
                    <?php foreach ($results as $row): ?>
                        <div class="card">
                            <img src="<?php echo $row['picture']; ?>" alt="Card Image" class="projectImg">
                            <h3 class="projectName"><?php echo $row['projectName']; ?></h3>
                            <p class="projectDiscription"><?php echo $row['projectDescription']; ?></p>
                            <a class="projectLink" href="<?php echo $row['link']; ?>">Link for project</a>
                            <a class="projectLink" href="<?php echo $row['link']; ?>">Link for GIT</a>
                        </div>
                    <?php endforeach; ?>

                    <?php else: ?>
                      <p class="xP"><?php echo $xP; ?></p>
                    <?php endif; ?>
        </div>
      </div>
      <div class="project">
        <div class="projectSection" id="webSecurity">
          <h1 class="title">Web Security</h1>
            <div class="card-container">
            <?php
                try {
                    $stmt = $db->query("SELECT id, projectName, projectDescription, link, picture FROM addProjectDB WHERE projectType = 'webSecurity'");
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                } catch (PDOException $e) {
                    echo "Fout bij het ophalen van gegevens uit de database: " . $e->getMessage();
                }
                ?>
                  <?php if (count($results) > 0): ?>
                    <?php foreach ($results as $row): ?>
                        <div class="card">
                            <img src="<?php echo $row['picture']; ?>" alt="Card Image" class="projectImg">
                            <h3 class="projectName"><?php echo $row['projectName']; ?></h3>
                            <p class="projectDiscription"><?php echo $row['projectDescription']; ?></p>
                            <a class="projectLink" href="<?php echo $row['link']; ?>">Link for project</a>
                            <a class="projectLink" href="<?php echo $row['link']; ?>">Link for GIT</a>
                        </div>
                    <?php endforeach; ?>

                    <?php else: ?>
                      <p class="xP"><?php echo $xP; ?></p>
                    <?php endif; ?>
          </div>
        </div>

        <div class="projects">
          <div class="projectSection" id="data">
            <h1 class="title">Databases</h1>
              <div class="card-container">
              <?php
                try {
                    $stmt = $db->query("SELECT id, projectName, projectDescription, link, picture FROM addProjectDB WHERE projectType = 'databases'");
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                } catch (PDOException $e) {
                    echo "Fout bij het ophalen van gegevens uit de database: " . $e->getMessage();
                }
                ?>
                  <?php if (count($results) > 0): ?>
                    <?php foreach ($results as $row): ?>
                        <div class="card">
                            <img src="<?php echo $row['picture']; ?>" alt="Card Image" class="projectImg">
                            <h3 class="projectName"><?php echo $row['projectName']; ?></h3>
                            <p class="projectDiscription"><?php echo $row['projectDescription']; ?></p>
                            <a class="projectLink" href="<?php echo $row['link']; ?>">Link for project</a>
                            <a class="projectLink" href="<?php echo $row['link']; ?>">Link for GIT</a>
                        </div>
                    <?php endforeach; ?>

                    <?php else: ?>
                      <p class="xP"><?php echo $xP; ?></p>
                    <?php endif; ?>
            </div>
          </div>

        <div class="projects">
          <div class="projectSection" id="gameDevalopment">
            <h1 class="title">Game Devalopment</h1>
              <div class="card-container">
              <?php
                try {
                    $stmt = $db->query("SELECT id, projectName, projectDescription, link, picture FROM addProjectDB WHERE projectType = 'gameDevalopment'");
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                } catch (PDOException $e) {
                    echo "Fout bij het ophalen van gegevens uit de database: " . $e->getMessage();
                }
                ?>
                  <?php if (count($results) > 0): ?>
                    <?php foreach ($results as $row): ?>
                        <div class="card">
                            <img src="<?php echo $row['picture']; ?>" alt="Card Image" class="projectImg">
                            <h3 class="projectName"><?php echo $row['projectName']; ?></h3>
                            <p class="projectDiscription"><?php echo $row['projectDescription']; ?></p>
                            <a class="projectLink" href="<?php echo $row['link']; ?>">Link for project</a>
                            <a class="projectLink" href="<?php echo $row['link']; ?>">Link for GIT</a>
                        </div>
                    <?php endforeach; ?>

                    <?php else: ?>
                      <p class="xP"><?php echo $xP; ?></p>
                    <?php endif; ?>
            </div>
          </div>

  <div class="projects">
    <div class="projectSection" id="codeSnipets">
      <h1 class="title">My Code Snipets</h1>
        <div class="card-container">
        <?php
                try {
                    $stmt = $db->query("SELECT id, projectName, projectDescription, link, picture FROM addProjectDB WHERE projectType = 'codeSnipets'");
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                } catch (PDOException $e) {
                    echo "Fout bij het ophalen van gegevens uit de database: " . $e->getMessage();
                }
                ?>
                <?php if (count($results) > 0): ?>
                    <?php foreach ($results as $row): ?>
                        <div class="card">
                            <img src="<?php echo $row['picture']; ?>" alt="Card Image" class="projectImg">
                            <h3 class="projectName"><?php echo $row['projectName']; ?></h3>
                            <p class="projectDiscription"><?php echo $row['projectDescription']; ?></p>
                            <a class="projectLink" href="<?php echo $row['link']; ?>">Link for project</a>
                            <a class="projectLink" href="<?php echo $row['link']; ?>">Link for GIT</a>
                        </div>
                    <?php endforeach; ?>
                    
                    <?php else: ?>
                      <p class="xP"><?php echo $xP; ?></p>
                    <?php endif; ?>
       </div>
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
 </div>  
</body>
</html> 