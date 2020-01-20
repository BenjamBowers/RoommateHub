<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="choreBoard.css">
		<title>Chore Board</title>
	</head>
	<body>
		<h1>Chore Board</h1>
		<h2>Date</h2>

		<table>
			<tr>
				<th>Person</th>
				<th>Daily Chores</th>
			</tr>
			<tr>
				<td>Ben B</td>
				<?php
						$tz = 'America/Indiana/Indianapolis';
						$timestamp = time();
						$dt = new DateTime("now", new DateTimeZone($tz));
						$dt->setTimestamp($timestamp);
						$day = $dt->format('l');
						$day = strtolower($day).".txt"; //file name based on day of week
						$file = fopen("BenB/".$day, "r"); //handle for the file

						echo "<td id=\"BenB\">"; //Store name as id to be retreived by addChore function (choreBoard.js)

						echo "<ul id=\"".$day."\">"; //Store weekday as id to be retreived by addChore function (choreBoard.js)
						while (!feof($file)) { //Makes a list for each of chores for each week day
							$line = fgets($file);
							if ($line != "") {
								$slash = explode("/", $line);
								if ($slash[1] == "c") {
									echo "<li>"."<input type=\"button\" class=\"checked\" value=\"&#10003\" onclick=\"check(this)\">".$slash[0]."</li>";
								} else {
									echo "<li>"."<input type=\"button\" class=\"unchecked\" value=\"X\" onclick=\"check(this)\">".$slash[0]."</li>";
								}
							}
						}//end while
						fclose($file);
						echo "</ul>";
				?>
			</tr>
			<tr>
				<td>Ben K</td>
				<?php
						$tz = 'America/Indiana/Indianapolis';
						$timestamp = time();
						$dt = new DateTime("now", new DateTimeZone($tz));
						$dt->setTimestamp($timestamp);
						$day = $dt->format('l');
						$day = strtolower($day).".txt"; //file name based on day of week
						$file = fopen("BenK/".$day, "r"); //handle for the file

						echo "<td id=\"BenK\">"; //Store name as id to be retreived by addChore function (choreBoard.js)

						echo "<ul id=\"".$day."\">"; //Store weekday as id to be retreived by addChore function (choreBoard.js)
						while (!feof($file)) { //Makes a list for each of chores for each week day
							$line = fgets($file);
							if ($line != "") {
								$slash = explode("/", $line);
								if ($slash[1] == "c") {
									echo "<li>"."<input type=\"button\" class=\"checked\" value=\"&#10003\" onclick=\"check(this)\">".$slash[0]."</li>";
								} else {
									echo "<li>"."<input type=\"button\" class=\"unchecked\" value=\"X\" onclick=\"check(this)\">".$slash[0]."</li>";
								}
							}
						}//end while
						fclose($file);
						echo "</ul>";
				?>
			</tr>
			<tr>
				<td>Evan</td>
				<?php
						$tz = 'America/Indiana/Indianapolis';
						$timestamp = time();
						$dt = new DateTime("now", new DateTimeZone($tz));
						$dt->setTimestamp($timestamp);
						$day = $dt->format('l');
						$day = strtolower($day).".txt"; //file name based on day of week
						$file = fopen("Evan/".$day, "r"); //handle for the file

						echo "<td id=\"Evan\">"; //Store name as id to be retreived by addChore function (choreBoard.js)

						echo "<ul id=\"".$day."\">"; //Store weekday as id to be retreived by addChore function (choreBoard.js)
						while (!feof($file)) { //Makes a list for each of chores for each week day
							$line = fgets($file);
							if ($line != "") {
								$slash = explode("/", $line);
								if ($slash[1] == "c") {
									echo "<li>"."<input type=\"button\" class=\"checked\" value=\"&#10003\" onclick=\"check(this)\">".$slash[0]."</li>";
								} else {
									echo "<li>"."<input type=\"button\" class=\"unchecked\" value=\"X\" onclick=\"check(this)\">".$slash[0]."</li>";
								}
							}
						}//end while
						fclose($file);
						echo "</ul>";
				?>
			</tr>
			<tr>
				<td>Juan</td>
				<?php
						$tz = 'America/Indiana/Indianapolis';
						$timestamp = time();
						$dt = new DateTime("now", new DateTimeZone($tz));
						$dt->setTimestamp($timestamp);
						$day = $dt->format('l');
						$day = strtolower($day).".txt"; //file name based on day of week
						$file = fopen("Juan/".$day, "r"); //handle for the file

						echo "<td id=\"Juan\">"; //Store name as id to be retreived by addChore function (choreBoard.js)

						echo "<ul id=\"".$day."\">"; //Store weekday as id to be retreived by addChore function (choreBoard.js)
						while (!feof($file)) { //Makes a list for each of chores for each week day
							$line = fgets($file);
							if ($line != "") {
								$slash = explode("/", $line);
								if ($slash[1] == "c") {
									echo "<li>"."<input type=\"button\" class=\"checked\" value=\"&#10003\" onclick=\"check(this)\">".$slash[0]."</li>";
								} else {
									echo "<li>"."<input type=\"button\" class=\"unchecked\" value=\"X\" onclick=\"check(this)\">".$slash[0]."</li>";
								}
							}
						}//end while
						fclose($file);
						echo "</ul>";
				?>
			</tr>
		</table>

		<div class="editBtn"><a href="EditChores/EditChores.php">Edit Chores</a></div>

		<script src="choreBoard.js"></script>
	</body>
</html>
