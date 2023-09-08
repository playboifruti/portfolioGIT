<?php
session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PORTFOLIO - ADMIN</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <?php include 'db.php'; ?>
    <!-- <a href="logout.php">Logout</a> -->
    <?php

if (isset($_POST["submit"])) {
    $projectName = $_POST["projectName"];
    $projectDescription = $_POST["projectDescription"];
    $projectType = $_POST["projectType"];
    $link = $_POST["link"];
    $linkGit = $_POST["linkGit"];

    $upload_dir = "../img/"; 
    $upload_file = $upload_dir . basename($_FILES["picture"]["name"]);
    $imageType = strtolower(pathinfo($upload_file, PATHINFO_EXTENSION));
    $check = $_FILES["picture"]["size"];
    $upload_ok = 0;

    if (file_exists($upload_file)) {
        echo "<script>alert('The file already exists')</script>";
        $upload_ok = 0;
    } else {
        $upload_ok = 1;
        if ($check !== false) {
            $upload_ok = 1;
            if ($imageType == 'jpg' || $imageType == 'png' || $imageType == 'jpeg' || $imageType == 'gif') {
                $upload_ok = 1;
            } else {
                echo '<script>alert("Please change the image format")</script>';
            }
        } else {
            echo '<script>alert("The photo size is 0. Please choose a different photo.")</script>';
            $upload_ok = 0;
        }
    }

    if ($upload_ok == 0) {
        echo '<script>alert("Sorry, your file was not uploaded. Please try again.")</script>';
    } else {
      move_uploaded_file($_FILES["picture"]["tmp_name"], $upload_file);

      $stmt = $db->prepare("INSERT INTO addProjectDB (projectName, projectDescription, projectType, link, linkGit, picture) VALUES (?, ?, ?, ?, ?, ?)");
      $stmt->execute([$projectName, $projectDescription, $projectType, $link, $linkGit, $upload_file]);
      
      $id = $db->lastInsertId();
      if ($id !== 0) {
          echo "<script>alert('Your project uploaded successfully')</script>";
      } else {
          echo "<script>alert('Error uploading project')</script>";
      }      
    } 
  }
?>

<div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
      </div>
        <div class="welcome"><span>Welcome Admin</span></div>
          <div class="screen-body">
            <div class="screen-body-item">

            <div class="flex-container">
                <div class="reviews">
                <h3 class="columnTitle">Reviews</h3>

                </div>
                <div class="addProject">
                <h3 class="columnTitle">Add project</h3>
                  <section id="upload_container">
                    <form action="admin.php" method="POST" enctype="multipart/form-data" >
                      <div class="app-form">
                        <div class="app-form-group">
                        <input class="app-form-control" type="text" name="projectName" id="projectName" placeholder="Project Name" required>
                        </div>
                        <div class="app-form-group">
                        <input class="app-form-control" type="text" name="projectDescription" id="	projectDescription" placeholder="Project Description" required>
                        </div>
                        <div class="app-form-group">
                          <select class="app-form-control" id="projectType" name="projectType" >
                              <option value="" disabled selected>Select Type</option>
                              <option value="webDevelopment">Web Development</option>  
                              <option value="webDesign">Web Design</option>
                              <option value="webSecurity">Web Security</option>
                              <option value="databases">Databases</option>  
                              <option value="gameDevalopment">Game Devalopment</option>  
                              <option value="codeSnipets">Code Snipets</option>  
                          </select>
                        </div>
                        <div class="app-form-group">
                        <input class="app-form-control" type="text" name="link" id="link" placeholder="Link">
                        </div>
                        <div class="app-form-group">
                        <input class="app-form-control" type="text" name="linkGit" id="linkGit" placeholder="Link Git">
                        </div>
                        <div class="app-form-group">
                        <input class="app-form-control" type="file" name="picture" id="picture" required hidden>
                        <button  id="choose" onclick="upload();">Choose Image</button>
                        <br>
                        <input class="app-form-button" type="submit" value="Upload" name="submit">
                      </div>
                    </form>
                  </section>
                  <script>
                      var projectName = document.getElementById("projectName");
                      var projectDescription = document.getElementById("projectDescription");
                      var projectType = document.getElementById("projectType");
                      var link = document.getElementById("link");
                      var linkGit = document.getElementById("linkGit");
                      var choose = document.getElementById("choose");
                      var uploadImage = document.getElementById("picture");

                      function upload() {
                          uploadImage.click();
                      }

                      uploadImage.addEventListener("change", function () {
                          var file = this.files[0];
                          if (projectName.value == "") {
                              projectName.value = file.name;
                          }
                          choose.innerHTML = "File name: (" + file.name + ")";
                      });
                  </script>


                </div>
                <div class="contacts">
                <h3 class="columnTitle">Messages</h3>

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
