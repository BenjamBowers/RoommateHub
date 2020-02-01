function createInputBox(tableCell) {
    var ul = tableCell.children[0]; //unordered list element
    var bullet = document.createElement("li"); //list element
    var inputBox = document.createElement("input"); //input text box
    inputBox.type = "text";
    inputBox.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
            event.preventDefault();

            addChore(this.value, this.parentNode);

            var tempChore = document.createElement("li");
            tempChore.textContent = this.value;
            ul.appendChild(tempChore);
            this.parentNode.remove();
        }
    });

    ul.appendChild(bullet);
    bullet.appendChild(inputBox);

    inputBox.focus();
    inputBox.select();

}

function addChore(chore, li) {
    var day = li.parentNode.id; //file name of correct weekday
    var person = li.parentNode.parentNode.id; //person responsible for chore

    console.log(chore);
    console.log(day);
    console.log(person);
    
    //Send a POST request to a PHP script that will add the chore to the correct file:
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "http://192.168.1.32/ChoreBoard/EditChores/addChore.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("chore=" + chore + "&day=" + day +"&person=" + person);
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            location.reload();
            //console.log("Server response: " + this.responseText);
        }
    }
    
}

function removeChore(li) {
    var chore = li.textContent; //The chore to be removed
    var nlIndex = chore.indexOf("-");
    chore = chore.substring(0, nlIndex); //Removing the '-' symbol that unfortunately comes from the button
    var day = li.parentNode.id; //file name of correct weekday
    var person = li.parentNode.parentNode.id; //person responsible for chore

    //Send a POST request to a PHP script that will remove the chore from the correct file:
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "http://192.168.1.32/ChoreBoard/EditChores/removeChore.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("chore=" + chore + "&day=" + day +"&person=" + person);

    li.remove(); //Delete the chore from the page
}