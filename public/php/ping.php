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
	<h2>Ping <?= $counter ?></h2>
	<a href="pong.php?counter=<?= $hit; ?>">HIT</a>
	<a href="pong.php?counter=<?= $miss; ?>">MISS</a>
</body>
</html>