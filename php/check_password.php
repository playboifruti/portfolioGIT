<?php
$correct_password = '2004';

if(isset($_POST['password']) && $_POST['password'] === $correct_password){
    session_start();
    $_SESSION['authenticated'] = true;
    header('Location: admin.php');
    exit();
} else {
    echo 'Incorrect password. <a href="login.php">Try again</a>';
}
?>
