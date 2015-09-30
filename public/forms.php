<!doctype html>
<html>
	<head>
		<meta charset+"utf-8">
		<title></title>
	</head>
		<body>
			<h1>GET</h1>
		    <?php var_dump($_GET); ?>

		    <h1>POST</h1>
		    <?php var_dump($_POST); ?>

			    <h2>Search</h2>
					<form method="GET" action="/forms.php">
				        <p>
				            <label for="search">Search</label>
				            <input id="search" name="search" type="text">
				        </p>
					    
			    <h2>for Log in Form</h2>
					<form method="POST" action="/forms.php">
						<p>
				            <label for="for_log_in_forms">For Log in Forms</label>
				            <input id="for_log_in_forms" name="for_log_in_forms" type="text">
				        </p>
			    
			    <h2>Sign-up Form</h2>
					<form method="POST" action="/forms.php">
						<p>
				            <label for="sign-up_forms">Sign-up Forms</label>
				            <input id="sign-up_forms" name="sign-up_forms" type="text">
				        </p>
			    
			    <h2>Contact-Me</h2>
					<form method="POST" action="/forms.php">
						<p>
				            <label for="contact-me">Contact-Me</label>
				            <input id="contact-me" name="contact-me" type="text">
				        </p>

		</body>
</html>