<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="EditChores.css">
		<title>Edit Chores</title>
	</head>
	<body>
		<?php
			$weekDays = array(
				1 => "sunday.txt",
				2 => "monday.txt",
				3 => "tuesday.txt",
				4 => "wednesday.txt",
				5 => "thursday.txt",
				6 => "friday.txt",
				7 => "saturday.txt"
			);

		?>
		<h1>Edit Chores</h1>
		<div class="BenB">
			<h2>Ben B</h2>
			<table>
				<tr>
					<th>Su</th>
					<th>M</th>
					<th>Tu</th>
					<th>W</th>
					<th>Th</th>
					<th>F</th>
					<th>Sa</th>
				</tr>
				<tr>
					<?php
						for ($i = 1; $i <= 7; $i++) {
							$day = $weekDays[$i]; //file names based on day of week
							$file = fopen("../BenB/".$day, "r"); //handle for the file

							echo "<td id=\"BenB\">"; //Store name as id to be retreived by addChore function (EditChores.js)

							echo "<ul id=\"".$weekDays[$i]."\">"; //Store weekday as id to be retreived by addChore function (EditChores.js)
							while (!feof($file)) { //Makes a list for each of chores for each week day
								$line = fgets($file);
								if ($line != "") {
									$slash = explode("/", $line);
									echo "<li>".$slash[0]."<button class=\"minus-btn\" onclick=\"removeChore(this.parentNode)\">-</button>"."</li>";
								}
							}//end while
							fclose($file);
							echo "</ul>";

							echo "<div class=\"add-btn\"><button onclick=\"createInputBox(this.parentNode.parentNode)\">+</button></div>";
							echo "</td>";
						} //end for
					?>
				</tr>
			</table>
		</div>
		<h2>Ben K</h2>
		<table>
			<tr>
				<th>Su</th>
				<th>M</th>
				<th>Tu</th>
				<th>W</th>
				<th>Th</th>
				<th>F</th>
				<th>Sa</th>
			</tr>
			<tr>
			<?php
						for ($i = 1; $i <= 7; $i++) {
							$day = $weekDays[$i]; //file names based on day of week
							$file = fopen("../BenK/".$day, "r"); //handle for the file

							echo "<td id=\"BenK\">"; //Store name as id to be retreived by addChore function (EditChores.js)

							echo "<ul id=\"".$weekDays[$i]."\">"; //Store weekday as id to be retreived by addChore function (EditChores.js)
							while (!feof($file)) { //Makes a list for each of chores for each week day
								$line = fgets($file);
								if ($line != "") {
									$slash = explode("/", $line);
									echo "<li>".$slash[0]."<button class=\"minus-btn\" onclick=\"removeChore(this.parentNode)\">-</button>"."</li>";
								}
							}//end while
							fclose($file);
							echo "</ul>";

							echo "<div class=\"add-btn\"><button onclick=\"createInputBox(this.parentNode.parentNode)\">+</button></div>";
							echo "</td>";
						} //end for
					?>
			</tr>
		</table>
		<h2>Evan</h2>
		<table>
			<tr>
				<th>Su</th>
				<th>M</th>
				<th>Tu</th>
				<th>W</th>
				<th>Th</th>
				<th>F</th>
				<th>Sa</th>
			</tr>
			<tr>
			<?php
						for ($i = 1; $i <= 7; $i++) {
							$day = $weekDays[$i]; //file names based on day of week
							$file = fopen("../Evan/".$day, "r"); //handle for the file

							echo "<td id=\"Evan\">"; //Store name as id to be retreived by addChore function (EditChores.js)

							echo "<ul id=\"".$weekDays[$i]."\">"; //Store weekday as id to be retreived by addChore function (EditChores.js)
							while (!feof($file)) { //Makes a list for each of chores for each week day
								$line = fgets($file);
								if ($line != "") {
									$slash = explode("/", $line);
									echo "<li>".$slash[0]."<button class=\"minus-btn\" onclick=\"removeChore(this.parentNode)\">-</button>"."</li>";
								}
							}//end while
							fclose($file);
							echo "</ul>";

							echo "<div class=\"add-btn\"><button onclick=\"createInputBox(this.parentNode.parentNode)\">+</button></div>";
							echo "</td>";
						} //end for
					?>
			</tr>
		</table>
		<h2>Juan</h2>
		<table>
			<tr>
				<th>Su</th>
				<th>M</th>
				<th>Tu</th>
				<th>W</th>
				<th>Th</th>
				<th>F</th>
				<th>Sa</th>
			</tr>
			<tr>
			<?php
						for ($i = 1; $i <= 7; $i++) {
							$day = $weekDays[$i]; //file names based on day of week
							$file = fopen("../Juan/".$day, "r"); //handle for the file

							echo "<td id=\"Juan\">"; //Store name as id to be retreived by addChore function (EditChores.js)

							echo "<ul id=\"".$weekDays[$i]."\">"; //Store weekday as id to be retreived by addChore function (EditChores.js)
							while (!feof($file)) { //Makes a list for each of chores for each week day
								$line = fgets($file);
								if ($line != "") {
									$slash = explode("/", $line);
									echo "<li>".$slash[0]."<button class=\"minus-btn\" onclick=\"removeChore(this.parentNode)\">-</button>"."</li>";
								}
							}//end while
							fclose($file);
							echo "</ul>";

							echo "<div class=\"add-btn\"><button onclick=\"createInputBox(this.parentNode.parentNode)\">+</button></div>";
							echo "</td>";
						} //end for
					?>
			</tr>
		</table>
		<script src="EditChores.js"></script>
	</body>
</html>
