function isRequired(inputfeild) {
    if (inputfeild.value.trim() === '') {
        return true;
    }
    else {
        return false;
    }
}

function isPhoneNoValid(inputField) {
    /*
         validation rule:
         must contain only 10 digits
         accepted phone no formats :
         (071) 222-3456
         (071)222-3456
         071-222-3456
         0712223456
    */
    const phoneRegex = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;

    if (!phoneRegex.test(inputField.value)) {
        return false;
    }
    else {
        return true;
    }
}

function isEmailValid(inputField) {
    const emailRegex = /[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+[.]+[a-z-A-Z]/;
    // const emailStatus = await this.isEmailExist(inputField.value);
    // const emailStatus = "DELIVERABLE";

    if (!emailRegex.test(inputField.value)) {
        return false;
    }
    else {
        return true;
    }
}


function success(inputField, element){
    inputField.style.border = "2px solid #28A745";
    element.innerHTML = "";
}

function error(inputField, element, errMessage){
    inputField.style.border = "2px solid #DC3545";
    element.innerHTML = errMessage;
}