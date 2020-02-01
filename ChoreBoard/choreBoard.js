const date = new Date();
			var month = ''; //The name of month
			var monthDay = date.getDate(); //Day of the month (number)
			var weekDay = ''; //The day of the week

			function check(checkBox) {
				var chore = checkBox.parentNode.textContent;
				var day = checkBox.parentNode.parentNode.id;
				var person = checkBox.parentNode.parentNode.parentNode.id;
				var checked = "";
				if (checkBox.className == "unchecked") {
					checked = "true";
					checkBox.className = "checked";
					checkBox.value = "\u2713";
				} else {
					checked = "false";
					checkBox.className = "unchecked";
					checkBox.value = "X";
                }

				var xmlhttp = new XMLHttpRequest();
    			xmlhttp.open("POST", "http://192.168.1.32/ChoreBoard/check.php", true);
    			xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xmlhttp.send("checked=" + checked + "&chore=" + chore + "&day=" + day + "&person=" + person);

				xmlhttp.onreadystatechange = function() {
        			if (this.readyState == 4 && this.status == 200) {
            			console.log("Server response: \n" + this.responseText);
       			 	
                    }
                }
				
				console.log(chore);
    			console.log(day);
    			console.log(person);
			}

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