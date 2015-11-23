<?php
require '../../lib/Input.php';

function pageController() {
	$counter = Input::get('counter');
	if (!is_numeric($counter)) {
		$counter = 0;
	}
	
	$hit = $counter + 1;
	$miss = 0;

	return array(
		'counter' => $counter,
		'hit' 	  => $hit,
		'miss' 	  => $miss
		);
}
extract(pageController());
?>
<!doctype html>
<html>
<head>
	<title>Ping</title>
</head>
<body>
	<h2>Pong <?= $counter ?></h2>

	<a href="ping.php?counter=<?= $hit; ?>">HIT</a>
	<a href="ping.php?counter=<?= $miss; ?>">MISS</a>
	
</body>
</html>