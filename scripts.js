
var button=document.querySelector('.submit-button');
var regExpass = /^(?=.*[\d])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*])[\w!@#$%^&*]{8,}$/;
var regExemail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


var inputNamefirst = document.getElementById('first');
var inputNamepass = document.getElementById('pass');
var inputNamerpass = document.getElementById('rpass');
var inputNamebeg = document.getElementById('beg');
var inputNamelas = document.getElementById('las');
var inputNameadd = document.getElementById('add');
var inputNamecity = document.getElementById('city');
var inputNamestate = document.getElementById('state');
var inputNameemail = document.getElementById('email');
var inputNamephone = document.getElementById('phonenum');
var inputNamezip = document.getElementById('zip');
var inputNamegen = document.getElementById('genother');
var inputNamemar = document.getElementById('marother');
var inputNamedob = document.getElementById('dob');

button.disabled = false;


function checkinput(){
    if(inputNamefirst.value.length < 6 || inputNamefirst.value.length > 50)
    {
        inputNamefirst.style.backgroundColor = '#ff7f7f';
        document.getElementById('usermess').hidden=false;

    }else {
        inputNamefirst.style.backgroundColor = '#00ff3f';
        document.getElementById('usermess').hidden=true;
    }
}

function checkinput2(){

    if((inputNamepass.value.length < 8 || inputNamepass.value.length > 52) || !regExpass.test(inputNamepass.value) )
    {
        inputNamepass.style.backgroundColor = '#ff7f7f';
        document.getElementById('passmess').hidden=false;


    }else {
        inputNamepass.style.backgroundColor = '#00ff3f';
        document.getElementById('passmess').hidden=true;
    }
}

function checkinput3(){

    if((inputNamerpass.value.length < 8 || inputNamerpass.value.length > 52) || !regExpass.test(inputNamerpass.value) || inputNamepass.value !== inputNamerpass.value)
    {
        inputNamerpass.style.backgroundColor = '#ff7f7f';
        document.getElementById('conpass').hidden = false;


    }else {
        inputNamerpass.style.backgroundColor = '#00ff3f';
        document.getElementById('conpass').hidden = true;
    }
}

function checkinput4() {

    if (inputNamebeg.value == "" || inputNamebeg.value.length > 50) {
        inputNamebeg.style.backgroundColor = '#ff7f7f';

    } else {
        inputNamebeg.style.backgroundColor = '#00ff3f'
    }
}

function checkinput5(){

    if(inputNamelas.value == "" || inputNamelas.value.length > 50) {
        inputNamelas.style.backgroundColor = '#ff7f7f';


    }else{
        inputNamelas.style.backgroundColor = '#00ff3f';
    }
}

function checkinput6(){

    if(inputNameadd.value == "" || inputNameadd.value.length > 100)
    {
        inputNameadd.style.backgroundColor = '#ff7f7f';

    }else {
        inputNameadd.style.backgroundColor = '#00ff3f'
    }
}

function checkinput7(){

    if(inputNamecity.value == "" || inputNamecity.value.length > 100)
    {
        inputNamecity.style.backgroundColor = '#ff7f7f';

    }else {
        inputNamecity.style.backgroundColor = '#00ff3f'
    }
}

function checkinputstate(){

    if(inputNamestate.value == "" || inputNamestate.value.length > 52)
    {
        inputNamestate.style.backgroundColor = '#ff7f7f';

    }else {
        inputNamestate.style.backgroundColor = '#00ff3f'
    }
}

function checkinputphone() {

    if (inputNamephone.value.length > 7) {
        inputNamephone.style.backgroundColor = '#00ff3f';

    } else {
        inputNamephone.style.backgroundColor = '#ff7f7f'
    }
}

function checkinputzip() {

    if (inputNamezip.value.length > 4) {
        inputNamezip.style.backgroundColor = '#00ff3f';
        
    } else {
        inputNamezip.style.backgroundColor = '#ff7f7f'
    }
}
function replacephone(){
    inputNamephone.value=inputNamephone.value.replace(/[^\d]/,'');
}
function replacezip(){
    inputNamezip.value=inputNamezip.value.replace(/[^\d]/,'');
}
function checkinputemail(){

    if(inputNameemail.value == "" || !regExemail.test(inputNameemail.value))
    {
        inputNameemail.style.backgroundColor = '#ff7f7f';


    }else {
        inputNameemail.style.backgroundColor = '#00ff3f';
    }
}

function deselectGen(){

    if(inputNamegen.value.length < 1)
    {
        inputNamegen.style.backgroundColor = '#ffffff';
        inputNamegen.required = false;
        document.getElementById("male").required = true;

    }else {
        document.getElementById("male").checked = false;
        document.getElementById("fema").checked = false;
        document.getElementById("male").required = false;
        inputNamegen.required = true;
        inputNamegen.style.backgroundColor = '#00ff3f'

    }
}



function deselectMar(){

    if(inputNamemar.value.length < 1)
    {
        inputNamemar.style.backgroundColor = '#ffffff';
        inputNamemar.required = false;
        document.getElementById("marr").required = true;

    }else {
        document.getElementById("sing").checked = false;
        document.getElementById("marr").checked = false;
        document.getElementById("sing").required = false;
        inputNamemar.required = true;
        inputNamemar.style.backgroundColor = '#00ff3f'

    }
}

function checkinputdob(){

    if(inputNamedob.value == "" || inputNamedob.value.length > 52)
    {
        inputNamedob.style.backgroundColor = '#ff7f7f';

    }else {
        inputNamedob.style.backgroundColor = '#00ff3f'
        button.style.backgroundColor = "#00ff3f"
    }
}

