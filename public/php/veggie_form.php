<?php
	var_dump($_GET);
	var_dump($_POST);
?>

<!doctype html>

<html>
<head>
	<title>Veggie Form</title>
</head>
<body>
	<form method="POST" action=/veggie_form.php>
	<p>
		<label for="username">Username</label>
		<input id="username" type="text">
	</p>
	<p>
		<input type="text" id="username" name="username" placeholder="Enter your">
	</p>
	<p>
		<label for="password">Password</label>
		<input id="password" type="password">
	</p>
	<p>
		<button type"submit">Submit</button>
	
	</p>
	</form>
		
		<form>
		<h3>Likeability Scale</h3>
		<p>
			<label for="turnip_greens">Turnip greens</label>
			<input type="range" id="turnip_greens" min="0" max"10" name="turnip_greens">
			<input type="submit" value="Rate">
		</p>
		<p>
			<label for="celery">Celery</label>
			<input type="range" id="celery" min="0" max"10" name="celery">
			<input type="submit" value="Rate">
		</p>
		<p>
			<label for="lotus_root">Lotus root</label>
			<input type="range" id="lotus_root" min="0" max"10" name="lotus_root">
			<input type="submit" value="Rate">
		</p>
		<p>
			<label for="brussels_sprout">Brussels sprout</label>
			<input type="range" id="brussels_sprout" min="0" max"10" name="brussels_sprout">
			<input type="submit" value="Rate">
		</p>
		<p>
			<label for="corn">Corn</label>
			<input type="range" id="corn" min="0" max"10" name="corn">
			<input type="submit" value="Rate">
		</p>
		</form>

		<form>
			<p>
				<textarea id="veggie_comment" name="veggie_comment" rows="8" cols="25">Your comments on Turnip greens:</textarea>
				<button>Send</button>
		</form>
		<form>
			<p>
				<textarea id="veggie_comment" name="veggie_comment" rows="8" cols="25">Your comments on Celery:</textarea>
				<button>Send</button>
			</p>
		</form>
		<form>
			<p>
				<textarea id="veggie_comment" name="veggie_comment" rows="8" cols="25">Your comments on Lotus root:</textarea>
				<button>Send</button>
			</p>
		</form>
		<form>
			<p>
				<textarea id="veggie_comment" name="veggie_comment" rows="8" cols="25">Your comments on Brussels sprout:</textarea>
				<button>Send</button>
			</p>
		</form>
		<form>
			<p>
				<textarea id="veggie_comment" name="veggie_comment" rows="8" cols="25">Your comments on Corn:</textarea>
				<button>Send</button>
			</p>
		</form>
		<form>
			<p>
				<input type="checkbox" id="likes_veggies" name="likes_veggies" value="yes" checked>
				<label for="likes_veggies">I like veggies!</label>
			</p>
		<form>
		</form>
			<h3>Which veggies do you like?</h3
			<p>
				<label>
					<input type="checkbox" id="veggie1" name="veggie[]" value="turnip_green">  Turnip Green
				</label>
				<label>
					<input type="checkbox" id="veggie2" name="veggie[]" value="Celery">  Celery
				</label>
				<label>
					<input type="checkbox" id="veggie3" name="veggie[]" value="lotus_root">  Lotus root
				</label>
				<label>
					<input type="checkbox" id="veggie4" name="veggie[]" value="brussels_sprout">  Brussels sprout
				</label>
				<label>
					<input type="checkbox" id="veggie5" name="veggie[]" value="corn">  Corn
				</label>
			</p>
		</form>
		<form>
			<h3>Which is your favorite?</h3>
			<p>
				<label>
					<input type="radio" name="v1" value="turnip_green">Turnip green
				</label>
				<label>
					<input type="radio" name="v1" value="celery">Celery
				</label>
				<label>
					<input type="radio" name="v1" value="lotus_root">Lotus root
				</label>
				<label>
					<input type="radio" name="v1" value="brussels_sprout">Brussels sprout
				</label>
				<label>
					<input type="radio" name="v1" value="corn">Corn
				</label>

			</p>
		</form>
		<form>
			<h3></h3>
			<p>
				<label for="prep">Select your favorite way to prepare veggies:</label>
				<select id="prep" name="prep">
					<option value="1">Raw</option>
					<option value="2">Steamed</option>
					<option value="3">Sauteed</option>
					<option value="4">Roasted</option>
					<option value="0">None of these</option>
			</p>
		</form>	
		
</body>
</html>