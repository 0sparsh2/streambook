var inputElement = document.getElementById("resume");
var cancelButton = document.getElementById("resumeCancel");
var numFiles = 0;

inputElement.onclick = function (event) {
    var target = event.target || event.srcElement;
    console.log(target, "clicked.");
    console.log(event);
    if (target.value.length == 0) {
        console.log("Suspect Cancel was hit, no files selected.");
        cancelButton.onclick();
    } else {
        console.log("File selected: ", target.value);
        numFiles = target.files.length;
    }
}

inputElement.onchange = function (event) {
    var target = event.target || event.srcElement;
    console.log(target, "changed.");
    console.log(event);
    if (target.value.length == 0) {
        console.log("Suspect Cancel was hit, no files selected.");
        if (numFiles == target.files.length) {
            cancelButton.onclick();
        }
    } else {
        console.log("File selected: ", target.value);
        numFiles = target.files.length;
    }
}

inputElement.onblur = function (event) {
    var target = event.target || event.srcElement;
    console.log(target, "changed.");
    console.log(event);
    if (target.value.length == 0) {
        console.log("Suspect Cancel was hit, no files selected.");
        if (numFiles == target.files.length) {
            cancelButton.onclick();
        }
    } else {
        console.log("File selected: ", target.value);
        numFiles = target.files.length;
    }
}


cancelButton.onclick = function (event) {
    console.log("Pseudo Cancel button clicked.");
}


function loadlinefn() {
    document.getElementById("resumeLine").style.display = "block";
}


function removelinefn() {
    document.getElementById("resumeLine").style.display = "none";
}

function extranamefn() {
    document.getElementById("preferredName").style.display = "block";
    document.getElementById("addpreferredName").style.display = "none";
    document.getElementById("addblk").style.marginTop = "20px";
}



function unicheck1() {
    var elems = document.getElementsByClassName("edu");
    var uni2 = document.getElementById("uni2");
    uni2.checked = false;
    for (var i = 0; i < elems.length; i++) {
        elems[i].style.display = 'block';
    }
}

function unicheck2() {
    var elems = document.getElementsByClassName("edu");
    var uni1 = document.getElementById("uni1");
    uni1.checked = false;
    for (var i = 0; i < elems.length; i++) {
        elems[i].style.display = 'none';
    }
}


/*Form validation using regex*/

function emailfn() {
    var x = document.getElementById("email").value;
    document.getElementById("emailcheck").style.color = "red";
    document.getElementById("emailcheck").innerHTML = "invalid";
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (mailformat.test(x)) {
        document.getElementById("emailcheck").style.color = "green";
        document.getElementById("emailcheck").innerHTML = "valid ";
    }
}

function phonefn() {
    var x = document.getElementById("phone").value;
    document.getElementById("phonecheck").style.color = "red";
    document.getElementById("phonecheck").innerHTML = "invalid";
    var mailformat = /^(0?\d{10})$/;
    if (mailformat.test(x)) {
        document.getElementById("phonecheck").style.color = "green";
        document.getElementById("phonecheck").innerHTML = "valid ";
    }
    document.getElementById("dobdiv").style.transform = "translate(0,-16px)";
}