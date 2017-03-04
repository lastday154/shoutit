<?php require_once("database.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Shout it</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="container">
		<header>
			<h1>SHOUT IT! Shoutbox</h1>
		</header>
		<div id="shouts">
				<ul>
					<?php echo get_shouts(); ?>
				</ul>
		</div>
		<div id="input">
				<?php if (isset($_GET['error'])) : ?>
					<div class="error"><?php echo $_GET['error']; ?></div>
				<?php endif; ?>
				<form method="post" action="process.php">
					<input type="text" name="user" placeholder="Enter Your Name">
					<input type="text" name="message" placeholder="Enter A Message">
					<br>
					<input class="shout-btn" type="submit" name="submit" value="Shout It Out">
				</form>
		</div>
	</div>
</body>
</html>