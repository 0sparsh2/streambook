const sb = document.getElementById("signinbtn")
function signupfn(){
    
    document.querySelector(".modal-content").style.backgroundColor = "wheat";
    document.querySelector("body").style.color = "#50729F";
    document.querySelector(".imgcontainer>span").style.color = "#50729F";
    document.getElementById("loginset").style.display="none";
    document.getElementById("signinset").style.display="block";
    document.getElementById("reg").style.transform= "translate(-16px)";
    document.getElementById("reg").style.border= "none";
    document.getElementById("reg").style.boxShadow= "none";
    document.getElementById("reg").style.backgroundColor = "wheat";
    document.getElementById("reg").style.height= "auto";
    sb.style.display = "block";
    var logsign = document.querySelectorAll("#logsign");
    for (i = 0; i < logsign.length; i++) {
        logsign[i].style.display = "none";
    }
    document.getElementById("loginend").style.display="none";
}


function passCheck(){
    var pass1 = document.getElementById('pswsu1').value;
    var pass2 = document.getElementById('pswsu2').value;
    /*var pass3 = document.getElementById('pswli').value;
    var email1 = document.getElementById('emailli').value;*/
    var email2 = document.getElementById('emailsu').value;
    if(pass1 == pass2 && pass1 != ""){
        return true;
        
    }
    else{
        alert("Both password inputs do not match. Please retry.");
        document.getElementById('userform2').reset();
        return false;
    }

}



/*function loginfn(){
    document.querySelector(".modal-content").style.backgroundColor = "#50729F";
    document.querySelector("body").style.color = "wheat";
    document.querySelector(".imgcontainer>span").style.color = "wheat";
    document.getElementById("loginset").style.display="block";
    document.getElementById("signinset").style.display="none";
    sb.style.display = "none";
    var logsign = document.querySelectorAll("#logsign");
    for (i = 0; i < logsign.length; i++) {
        logsign[i].style.display = "block";
    }
    document.getElementById("loginend").style.display="block";
}

*/

function emailfn() {
    var x = document.getElementById("emailsu").value;
    document.getElementById("emailsu").style.color = "red";
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (mailformat.test(x)) {
        document.getElementById("emailsu").style.color = "#39ff14";    }
}

function pswfn(){
    console.log("happy"); 
    var n = document.getElementById("pswu1").value;  
    document.getElementById("pswcheck").innerHTML="invalid";
    document.getElementById("pswcheck").style.color = "red"; 
    var mailformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
    if (mailformat.test(n)) {
        document.getElementById("pswcheck").innerHTML="valid";
        document.getElementById("pswcheck").style.color = "#39ff14";    }
}

function pswconfirmfn() {
    var m = document.getElementById("pswu2").value;
    document.getElementById("pswu2").style.color = "red";
    if (n==m) {
        document.getElementById("pswu2").style.color = "#39ff14";    }
}