function createInputBox(tableCell) {
    var ul = tableCell.children[0]; //unordered list element
    var bullet = document.createElement("li"); //list element
    var inputBox = document.createElement("input"); //input text box
    inputBox.type = "text";
    inputBox.addEventListener("keyup", function(event) {
        if (event.keyCode === 13) {
            event.preventDefault();

            addChore(this.value, this.parentNode.parentNode.id, this.parentNode.parentNode.parentNode.id);

            /*var minusBtn = document.createElement("button");
            minusBtn.textContent = "-";
            minusBtn.className = "minus-btn";
            minusBtn.onclick = removeChore(this.parentNode, this.parentNode.parentNode.id, this.parentNode.parentNode.parentNode.id);*/

            var tempChore = document.createElement("li");
            tempChore.textContent = this.value;
            ul.appendChild(tempChore);
            //tempChore.appendChild(minusBtn);
            this.parentNode.remove();
        }
    });

    ul.appendChild(bullet);
    bullet.appendChild(inputBox);

    inputBox.focus();
    inputBox.select();

}

function addChore(chore, day, person) {
    console.log(chore);
    console.log(day);
    console.log(person);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "http://192.168.1.32/EditChores/addChore.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("chore=" + chore + "&day=" + day +"&person=" + person);
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            location.reload();
        }
    }
    
}

function removeChore(li, day, person) {
    var chore = li.textContent;
    var nlIndex = chore.indexOf("-");
    chore = chore.substring(0, nlIndex);

    console.log(chore);
    console.log(person);
    console.log(day);

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "http://192.168.1.32/EditChores/removeChore.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("chore=" + chore + "&day=" + day +"&person=" + person);

    li.remove();
}