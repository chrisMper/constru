const firstName= document.getElementById('firstName');
const lastName= document.getElementById('lastName');
const phone= document.getElementById('phone');
const email= document.getElementById('email');
const firstName_err= document.getElementById('firstName_err');
const lastName_err= document.getElementById('lastName_err');
const phone_err= document.getElementById('phone_err');
const email_err= document.getElementById('email_err');
const next1= document.getElementById('next1');



function validateFirstName() {
    if(isRequired(firstName)){
        error(firstName,firstName_err,'First Name is required');
        return false;
       
    }else {
        success(firstName,firstName_err);
        return true;
    }
}

function validateForm1(){
    if(!validateFirstName()){
        return false;
    }else {
        return true;
    }
}

next1.addEventListener('click', function(e){
    e.preventDefault();
    if(validateForm1()){
        console.log('validate');
    }
});