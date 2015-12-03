<?php

require_once  '../../parks_login.php';
require_once '../../db_connect.php';
require_once '../../lib/Input.php';

$page = Input::has('page') ? Input::get('page') : 1;
$limit = 3;
$offset = ($page * $limit) - $limit; 

$selectAll = "SELECT * FROM national_parks LIMIT $limit OFFSET $offset";

$stmt = $dbc->query($selectAll);

$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);

$count = "SELECT COUNT(*) from national_parks";
$stmt2 = $dbc->query($count);
$counted = $stmt2->fetchAll(PDO::FETCH_ASSOC);
$totalItems = ($counted[0]['COUNT(*)']);
$pageLimiter = ceil($totalItems/$limit);


?>
<!doctype html>
<html>
<head>
	<title>National Parks Database</title>
</head>
<body>
	<h4>We are on page <?= $page ?></h4>
	<h2>National Parks</h2>
	<h3>Database Driven Web Application</h3>

	<?php if ($page > 1) { ?>
		<a href="?page=<?= $page-1 ?>">Previous</a>
	<?php } ?>
	<?php if ($page < $pageLimiter) { ?>
		<a href="?page=<?= $page+1 ?>">Next</a>
	<?php } ?>

	<table>
		<tr>
			<th>Park Name</th>
			<th>Location</th>
			<th>Date Established</th>
			<th>Area in Acres</th>
		</tr>
		<?php foreach($parks as $park): ?>
			<tr>	
				<th><?= $park['name'] ?></th>
				<th><?= $park['location'] ?></th>
				<th><?= $park['date_established'] ?></th>
				<th><?= $park['area_in_acres'] ?></th>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>