<?php
$favoriteThings = ['alpacas', 'dogs', 'pizza', 'pinot noir', 'British comedies'];

?>
<!doctype html>
<html>
<head>
	<title>My Favorite Things</title>
</head>
<body>
	<h3>My Favorite Things</h3>
		<ul>
		<?php foreach ($favoriteThings as $thing): ?>
        	<li><?= $thing; ?></li>
    	<?php endforeach; ?>
		</ul>

</body>
</html>