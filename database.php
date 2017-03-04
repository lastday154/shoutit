<?php

// connect to mysql
$con = mysqli_connect("localhost", "root", "", "shoutit");
if (mysqli_connect_errno()) {
	echo 'Failed to connect to mysql' . mysqli_connect_errno();
}

	// create select query
function get_shouts() {
	global $con;
	$query = "SELECT * FROM shouts ORDER BY id DESC";
	$shouts = mysqli_query($con, $query);
	while ($row = mysqli_fetch_assoc($shouts)) {
		$shout = <<<DELIMETER
		<li class="shout"><span>{$row['time']} - </span><strong>{$row['user']}</strong>: {$row['message']}? </li>
DELIMETER;
		echo $shout;
	}
}
?>