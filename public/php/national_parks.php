<?php

require_once  '../../parks_login.php';
require_once '../../db_connect.php';
require_once '../../lib/Input.php';


function formatData() {
	$date = Input::getDate('date_established');
	$d = $date->format('Y-m-d');
	echo $d;
}

function insertPark($dbc, $name, $location, $date_established, $area_in_acres, $description) {
	
	$insert = "INSERT INTO national_parks(name, location, date_established, area_in_acres, description) 
		VALUES (:name, :location, :date_established, :area_in_acres, :description)";
	$stmt = $dbc->prepare($insert);
	$stmt->bindValue(':name', $name, PDO::PARAM_STR);
	$stmt->bindValue(':location', $location, PDO::PARAM_STR);
	$stmt->bindValue(':date_established', $date_established , PDO::PARAM_STR);
	$stmt->bindValue(':area_in_acres', $area_in_acres, PDO::PARAM_INT);
	$stmt->bindValue(':description', $desciption, PDO::PARAM_STR);
	$stmt->execute();
}

function deletePark($dbc) {
	$delete ="DELETE FROM national_parks WHERE name = :deleted_name";
	$stmt = $dbc->prepare($delete);
	$stmt->bindValue(':deleted_name', $_POST['deleted_name'], PDO:: PARAM_STR);
	$stmt->execute();
}

function getResults ($dbc, $limit, $offseter) {
// get results from database
	$query = "SELECT * FROM national_parks LIMIT :limit OFFSET :offseter";
	$stmt = $dbc->prepare($query);
	$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
	$stmt->bindValue(':offseter', $offseter, PDO::PARAM_INT);
	$stmt->execute();
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $results;
}

function getPagination ($dbc, $limit) {
	// gets count for pagination
	$count = "SELECT COUNT(*) from national_parks";
	$stmt2 = $dbc->prepare($count);
	$stmt2->execute();
	$counted = $stmt2->fetchAll(PDO::FETCH_ASSOC);
	$totalItems = ($counted[0]['COUNT(*)']);
	$pageLimiter = ceil($totalItems/$limit);
	return $pageLimiter;
}

function sanitizePages($pageLimiter) {
	$page = Input::get('page', 1);
	$page = ($page>0)?$page:1;
	$page = ($page<=$pageLimiter)?$page: 1;
	return $page;
}

function pageController($dbc) {
	$errors = array();

	// this block checks to see if anerror is going to be thrown
	try {
		$name = Input::getString('name');
	} catch (Exception $e) {
		$error = $e->getMessage();
		array_push($errors, $error);
	}
	try {
		$location = Input::getString('location');
	} catch (Exception $e) {
		array_push($errors, $e->getMessage());
	}
	try {
		$date_established = formatDate();
	} catch (Exception $e) {
		array_push($errors, $e->getMessage());
	}
	try {
		$area_in_acres = Input::getNumber('area_in_acres');
	} catch (Exception $e) {
		array_push($errors, $e->getMessage());
	}
	try {
		$description = Input::getString('description');
	} catch (Exception $e) {
		array_push($errors, $e->getMessage());
	}
}

if(!empty($_POST)){
	// add inputed data into datebase
	if (Input::notEmpty('name') 
		&& Input::notEmpty('location') 
		&& Input::notEmpty('date_established') 
		&& Input::notEmpty('area_in_acres') 
		&& Input::notEmpty('description') ){
			
	// if no errors were thrown runs insert park
		if(empty($errors)) {
			insertPark($dbc, $name, $location, $date_established, $area_in_acres, $description);
			$errors = array();
		}

	} elseif (Input::notEmpty('deleted_name')) {
		$deletePark($dbc);
	} else {
		echo "Please make a valid entry.";
	}
}

// moving this anywhere else doesn't work because these are all the variables
$limit = 4;

$pageLimiter = getPagination($dbc, $limit);

// prevents users from breaking page
$page = sanitizePages($pageLimiter);

// set pagination for page
$offseter = ($page * $limit) - $limit; 

$results = getResults ($dbc, $limit, $offseter);

return array(
	'results' => $results,
	'page' => $page,
	'pageLimiter' => $pageLimiter,
	'errors' => $errors
	);


extract (pageController($dbc));




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
			<th>Description</th>
		</tr>
		<?php foreach($parks as $park): ?>
			<tr>	
				<th><?= $park['name'] ?>
					<form method="POST">
						<button name="deleted_name" type="submit" value="<?=$park['name']?>"></button>
					</form>
				</th>
				<th><?= $park['location'] ?></th>
				<th><?= $park['date_established'] ?></th>
				<th><?= $park['area_in_acres'] ?></th>
				<th><?= $park['description'] ?></th>
			</tr>
		<?php endforeach ?>
	</table>
	<div>
			<form method="POST">
        		<input type="text" id="name" name="name" placeholder="Name of Park">
        		<input type="text" id="location" name="location" placeholder="State">
        		<input type="text" id="area_in_acres" name="area_in_acres" placeholder="Area In Acres">
          		<input type="text" id="date_established" name="date_established" placeholder="Date Established">
          		<input type="textarea" id="description" name="description" placeholder="Description">
        		<input type="submit" value="add">	
   			</form>
		</div>
</body>
</html>