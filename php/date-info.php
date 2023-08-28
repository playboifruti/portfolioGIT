<?php
$birthDate = "07-09-2004"; // Change the format to match your actual birthdate
$birthDate = explode("-", $birthDate); // Use "-" as the delimiter since that's the format you provided
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]);
?>