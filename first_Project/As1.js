function showDetails() {
    var x = document.getElementById("detailDiv");
    x.innerHTML = "Show details:<br> ProjectName: The one you just clicked <br>Description about this project <br> Author: TBA <br> Date: TBA";
}

function changeColor() {
    var x = document.getElementById("detailDiv");
    if (x.style.backgroundColor != "lightblue") {
        x.style.backgroundColor = "lightblue"
    } else {
        x.style.backgroundColor = "transparent"
    }
}

function skipIfMax(element) {
    max = parseInt(element.dataset.max);
    if (element.value.length >= max && element.nextElementSibling) {
        element.nextElementSibling.focus();
    }
}

function toUpperCase() {
    var input = document.getElementById("pname").value.toUpperCase();
    var output = document.getElementById("upperCaseLabel");
    output.innerHTML = "Project Name: " + input;
}

function validateUserName() {
    var input = document.getElementById('usernameInput').value;
    var output = document.getElementById('usernameOutput')
    if (input.match("^[a-zA-Z0-9]*$")) {
        output.innerHTML = "Username validated!";
    } else {
        output.innerHTML = "Username failed";
    }
}
//Check Password
function checkPassWord() {
    var p1 = document.getElementById('c1').value;
    var p2 = document.getElementById('c2').value;
    if (p1 == p2) {
        document.getElementById("c2").style.backgroundColor = 'aquamarine';
        // document.getElementById("test").innerHTML = p1;
        // document.getElementById("test1").innerHTML = p2;
    } else {
        document.getElementById("c2").style.backgroundColor = 'red';
        // document.getElementById("test").innerHTML = p1;
        // document.getElementById("test1").innerHTML = p2;
    }
}

function Check() {
    var input1 = document.getElementById("fname").value;
    var input2 = document.getElementById("lname").value;

    var btn = document.getElementById("checkButton");
    if (input1 != "" && input2) {
        btn.removeAttribute('disabled')
    } else {
        btn.disabled = "disabled"
        return
    }
}

function getLocation() {
    var x = document.getElementById("demo");
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    var x = document.getElementById("lat");
    var y = document.getElementById("lon")
    x.innerHTML = "Latitude: " + position.coords.latitude ;
    y.innerHTML = "Longitude: " + position.coords.longitude ;
}

//Drag and Drop Function
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}

//ClickCount Function
function counter() {
    var x = document.getElementById("countResult");
    if (typeof (Storage) != "undefined") {
        if (sessionStorage.clickcount) {
            sessionStorage.clickcount = Number(sessionStorage.clickcount) + 1;
        } else {
            sessionStorage.clickcount = 1;
        }
        x.innerHTML = "You tapped the button " + sessionStorage.clickcount + " times";
    } else {
        x.innerHTML = "Unable to reach";
    }
}
