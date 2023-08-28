<?php include 'php/db.php'; ?>

<?php
try {
    $stmt = $db->query("SELECT id, naam, surname, functie, tekst FROM portfolioDB");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Fout bij het ophalen van gegevens uit de database: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Weergeef Gegevens</title>
</head>
<body>
    <h1>Weergeef Gegevens</h1>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Achternaam</th>
            <th>Functie</th>
            <th>Tekst</th>
        </tr>
        <?php foreach ($results as $row): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['naam']; ?></td>
                <td><?php echo $row['surname']; ?></td>
                <td><?php echo $row['functie']; ?></td>
                <td><?php echo $row['tekst']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
