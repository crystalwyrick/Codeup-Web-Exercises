<?php

function pageController() {
	$counter = isset($_GET['counter']) ? $_GET['counter'] : 0 ;

	$up = $counter + 1;
	$down = $counter - 1;

	
	return array(
		'up' 	  => $up,
		'down' 	  => $down,
		'counter' => $counter
		);
}

extract(pageController());
?>
<!doctype html>

<html>
<head>
	<title>Counter</title>
</head>
<body>

	<h2>Counter: <?= $counter ?></h2>

	<a href="counter.php?counter=<?= $up; ?>">UP</a>
	<a href="counter.php?counter=<?= $down; ?>">DOWN</a>



</body>
</html>