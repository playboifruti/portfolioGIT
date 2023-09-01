<?php include 'db.php'; ?>

<?php
    try {
        $stmt = $db->query("SELECT id, naam, surname, functie, tekst FROM portfolioDB");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        echo "Fout bij het ophalen van gegevens uit de database: " . $e->getMessage();
    }
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Admin Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/reviewTablestyle.css">
	<link rel="icon" href="../img/favicon.png">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"><span><b>Admin</b></span> Reviews Tabel</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-bordered table-dark table-hover">
						  <thead>
						    <tr>
						      <th>#</th>
						      <th>First & Last Name</th>
						      <th>Function</th>
						      <th>Review</th>
						    </tr>
						  </thead>
						  <tbody>
                          <?php foreach ($results as $row): ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['naam'] . ' ' . $row['surname']; ?></td>
                                <td><?php echo $row['functie']; ?></td>
                                <td><?php echo $row['tekst']; ?></td>
                            </tr>
                           <?php endforeach; ?>
						    
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="..js/jquery.min.js"></script>
  <script src="..js/popper.js"></script>
  <script src="..js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>

	</body>
</html>
