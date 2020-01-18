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
				<th>Dailey Chores</th>
				<th>Done?</th>
			</tr>
			<tr>
				<td>Ben B</td>
				<td>
					<ul>
						<li><input type="checkbox">dishes</input></li>
						<li><input type="checkbox">trash</input></li>
						<li><input type="checkbox">pay the troll</input></li>
					</ul>
				</td>
				<td>NO</td>
			</tr>
		</table>

		<div class="editBtn"><a href="EditChores/EditCHores.php">Edit Chores</a></div>

		<script>
			const date = new Date();
			var month = ''; //The name of month
			var monthDay = date.getDate(); //Day of the month (number)
			var weekDay = ''; //The day of the week

			switch(date.getMonth()) {
				case 0:
					month = 'January';
					break;
				case 1:
					month = 'February';
					break;
				case 2:
					month = 'March';
					break;
				case 3:
					month = 'April';
					break;
				case 4:
					month = 'May';
					break;
				case 5:
					month = 'June';
					break;
				case 6:
					month = 'July';
					break;
				case 7:
					month = 'August';
					break;
				case 8:
					month = 'September';
					break;
				case 9:
					month = 'October';
					break;
				case 10:
					month = 'November';
					break;
				case 11:
					month = 'December';
					break;
				default:
					month = 'undefined';
			}

			switch(date.getDay()) {
				case 0:
					weekDay = 'Sunday';
					break;
				case 1:
					weekDay = 'Monday';
					break;
				case 2:
					weekDay = 'Tuesday';
					break;
				case 3:
					weekDay = 'Wednesday';
					break;
				case 4:
					weekDay = 'Thursday';
					break;
				case 5:
					weekDay = 'Friday';
					break;
				case 6:
					weekDay = 'Saturday';

			}

			const header2 = document.querySelector('h2');
			header2.textContent = weekDay + ', ' + month + ' ' +  monthDay;

			const inputs = document.getElementsByTag
		</script>
	</body>
</html>
