<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht 3</title>
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }
</style>

<body>

    <?php include 'db.php'; ?>
    
    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $naam = $_POST['naam'];
        $surname = $_POST['surname'];
        $functie = $_POST['functie'];
        $tekst = $_POST['tekst'];

        if (empty($naam) || empty($surname) || empty($functie) || empty($tekst)) {
            echo "Niet alles is ingevuld";
        } else {
            try {
                $stmt = $db->prepare("INSERT INTO portfolioDB(naam, surname, functie, tekst) VALUES (?, ?, ?, ?)");
                $stmt->execute([$naam, $surname, $functie, $tekst]);

                $id = $db->lastInsertId();

                echo "<p>Data is succesvol naar de database verzonden. </p>";
                echo "<p>Je hebt gestuurd: $naam, $surname, $functie, $tekst <br>Jou review id is: $id</p>";
            } catch(PDOException $e) {
                echo "Fout bij het verzenden naar de database: " . $e->getMessage();
            }
        }
    }
    ?>

    <form method="POST" action="">
        <label for="naam">Name:</label><br>
        <input type="text" id="naam" name="naam"><br>
        <label for="surname">Surname:</label><br>
        <input type="text" id="surname" name="surname"><br>
        <label for="functie">Functie:</label><br>
        <input type="text" id="functie" name="functie"><br>
        <label for="tekst">Text:</label><br>
        <input type="text" id="tekst" name="tekst"><br>
        <input type="submit" value="Toevoegen" style="border: 1px solid transparent; border-radius: 8px; color: #fff; background-color: #44DD99; padding: 15px;">
    </form>


</body>
</html>

