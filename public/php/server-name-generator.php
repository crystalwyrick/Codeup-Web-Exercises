<?php

function pageController() {

$adjectives = ['awesome', 'lively', 'worried', 'blue-green', 'outdated', 'wasted', 'optimistic', 'healthy', 'asthmatic', 'over-the-top'];
$nouns = ['raccoon', 'street car', 'pyramid', 'cheetah', 'market', 'volcano', 'VW Bug', 'paycheck', 'playground', 'planet' ];

$keyAdj = array_rand($adjectives);
$keyNoun = array_rand($nouns);

$randomAdj = $adjectives[$keyAdj];
$randomNoun = $nouns[$keyNoun];

return array(
	'randomAdj' => $randomAdj,
	'randomNoun' => $randomNoun
	);

}

extract(pageController());
?>
<!doctype html>

<html>
<head>
	<title>Server Name Generator</title>
	<style>
		body{
			background-color: #d8ecf9;
		}
		#adjective,
		#noun {
			font-size: 36px;
		}
		#adjective {
			font-family: fantasy;
			color:#cc0066;		
		}
		#noun {
			font-family: 'Sigmar One';
			color:#009999;
			position: absolute;	
			margin-left: 5px;
		}
	</style>
</head>
<body>
	<div>
		<h1>Your Server Name is:</h1>
		<h2>
			<span id="adjective"><?= $randomAdj; ?></span>
			<span id="noun"><?= $randomNoun; ?> </span>
		</h2>

	</div>

</body>
</html>