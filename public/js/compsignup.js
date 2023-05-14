// const prevBtns = document.querySelectorAll(".btn-prev");
// const progress = document.getElementById("progress");
// const formSteps = document.querySelectorAll(".form-step");
// const progressSteps = document.querySelectorAll(".progress-step");
// // const firstName= document.getElementById('firstName');
// // const lastName= document.getElementById('lastName');
// // const phone= document.getElementById('phone');
// // const email= document.getElementById('email');
// // const firstName_err= document.getElementById('firstName_err');
// // const lastName_err= document.getElementById('lastName_err');
// // const phone_err= document.getElementById('phone_err');
// // const email_err= document.getElementById('email_err');
// // const next1= document.getElementById('next1');
// // const adline1= document.getElementById('adline1');
// // const adline2= document.getElementById('adline2');
// // const District= document.getElementById('District');
// // const adline1_err= document.getElementById('adline1_err');
// // const adline2_err= document.getElementById('adline2_err');
// // const District_err= document.getElementById('District_err');
// // const next2= document.getElementById('next2');
// // const password= document.getElementById('password');
// // const confirm_password= document.getElementById('confirm_password');
// // const confirm_password_err= document.getElementById('confirm_password_err');
// // const password_err= document.getElementById('password_err');
// // const next3= document.getElementById('next2');


// // let formStepsNum = 0;

// // function validateFirstName() {
// //     if(isRequired(firstName)){
// //         error(firstName,firstName_err,'First Name is required');
// //         return false;
       
// //     }else {
// //         success(firstName,firstName_err);
// //         return true;
// //     }
// // }

// // function validateLastName() {
// //   if(isRequired(lastName)){
// //       error(lastName,lastName_err,'Last Name is required');
// //       return false;
     
// //   }else {
// //       success(lastName,lastName_err);
// //       return true;
// //   }
// // }

// // function validatePhoneNo() {
// //   if(isRequired(phone)){
// //       error(phone,phone_err,'Phone Number is required');
// //       return false;
     
// //   }else if(!isPhoneNoValid(phone)) {
// //       error(phone,phone_err,'Use Valid PhoneNumber');
// //       return false;
// //   }else{
// //     success(phone,phone_err);
// //     return true;
// //   }
// // }

// // function validateEmail() {
// //   if(isRequired(email)){
// //       error(email,email_err,'Email is required');
// //       return false;
     
// //   }
// //   else if(!isEmailValid(email)){
// //       error(email,email_err,'Email is invalid');
// //       return false;
// //   }
// //   else {
// //     success(email,email_err);
// //     return true;
// //   }
// // }


// // function validateForm1(){
// //     if(!validateFirstName() && !validateLastName() && !validatePhoneNo() && !validateEmail()){
// //         return false;
// //     }
// //     else if(!validateFirstName()){
// //       return false;
// //     }
// //     else if(!validateLastName()){
// //       return false;
// //     }
// //     else if(!validatePhoneNo()){
// //       return false;
// //     }
// //     else if(!validateEmail()){
// //       return false;
// //     }
// //     else {
// //         return true;
// //     }
// // }

// // next1.addEventListener('click', function(e){
// //     e.preventDefault();
// //     if(validateForm1()){
// //       formStepsNum++;
// //       updateFormSteps();
// //       updateProgressbar();
        
// //     }
// // });



// // ////////////////////////////////

// // function validateadline1() {
// //   if(isRequired(adline1)){
// //       error(adline1,adline1_err,'Address line one is required');
// //       return false;
     
// //   }else {
// //       success(adline1,adline1_err);
// //       return true;
// //   }
// // }

// // function validateadline2() {
// // if(isRequired(adline2)){
// //     error(adline2,adline2_err,'Address line two is required');
// //     return false;
   
// // }else {
// //     success(adline2,adline2_err);
// //     return true;
// // }
// // }

// // function validateDistrict() {
// // if(isRequired(District)){
// //     error(District,District_err,'District is required');
// //     return false;
   
// // }else{
// //   success(District,District_err);
// //   return true;
// // }
// // }



// // function validateForm2(){
// //   if(!validateDistrict() && !validateadline2() && !validateadline1()){
// //       return false;
// //   }
// //   else if(!validateDistrict()){
// //     return false;
// //   }
// //   else if(!validateadline2()){
// //     return false;
// //   }
// //   else if(!validateadline1()){
// //     return false;
// //   }
// //   else {
// //       return true;
// //   }
// // }

// // next2.addEventListener('click', function(e){
// //   e.preventDefault();
// //   if(validateForm2()){
// //     formStepsNum++;
// //     updateFormSteps();
// //     updateProgressbar();
      
// //   }
// // });


// // ////////////////////////////////

// // function validatepassword() {
// //   if(isRequired(password)){
// //       error(password,password_err,'Password is required');
// //       return false;
     
// //   }else {
// //       success(password,password_err);
// //       return true;
// //   }
// //   }
  
// //   function validateconfirm_password() {
// //   if(isRequired(confirm_password)){
// //       error(confirm_password,confirm_password_err,'Confirm Password is required');
// //       return false;
     
// //   }else{
// //     success(confirm_password,confirm_password_err);
// //     return true;
// //   }
// //   }
  
  
  
// //   function validateForm3(){
// //     if(!validatepassword() && !validateconfirm_password()){
// //         return false;
// //     }
// //     else if(!validatepassword()){
// //       return false;
// //     }
// //     else if(!validateconfirm_password()){
// //       return false;
// //     }
// //     else {
// //         return true;
// //     }
// //   }
  
// //   next3.addEventListener('click', function(e){
// //     e.preventDefault();
// //     if(validateForm3()){
// //       formStepsNum++;
// //       updateFormSteps();
// //       updateProgressbar();
        
// //     }
// //   });

// //   ////////////////////////////////////////////////////////////////



// // nextBtns.forEach((btn) => {
// //   btn.addEventListener("click", () => {
// //     formStepsNum++;
// //     updateFormSteps();
// //     updateProgressbar();
// //   });
// // });

// // prevBtns.forEach((btn) => {
// //   btn.addEventListener("click", () => {
// //     formStepsNum--;
// //     updateFormSteps();
// //     updateProgressbar();
// //   });
// // });

// function updateFormSteps() {
//   formSteps.forEach((formStep) => {
//     formStep.classList.contains("form-step-active") &&
//       formStep.classList.remove("form-step-active");
//   });

//   formSteps[formStepsNum].classList.add("form-step-active");
// }

// function updateProgressbar() {
//   // idx is a utility function for traversing properties on objects and arrays.
//   progressSteps.forEach((progressStep, idx) => {
//     if (idx < formStepsNum + 1) {
//       progressStep.classList.add("progress-step-active");
//     } else {
//       progressStep.classList.remove("progress-step-active");
//     }
//   });

//   const progressActive = document.querySelectorAll(".progress-step-active");

//   progress.style.width =
//     ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
// }


// function validateForm() {
//   // This function deals with validation of the form fields
//   var x, y, i, valid = true;
//   x = document.getElementsByClassName("tab");
//   y = x[currentTab].getElementsByTagName("input");
//   // A loop that checks every input field in the current tab:
//   for (i = 0; i < y.length; i++) {
//     // If a field is empty...
//     if (y[i].value == "") {
//       // add an "invalid" class to the field:
//       y[i].className += " invalid";
//       // and set the current valid status to false:
//       valid = false;
//     }
//   }
//   // If the valid status is true, mark the step as finished and valid:
//   if (valid) {
//     document.getElementsByClassName("step")[currentTab].className += " finish";
//   }
//   return valid; // return the valid status
// }
const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");

let formStepsNum = 0;

nextBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum++;
    updateFormSteps();
    updateProgressbar();
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum--;
    updateFormSteps();
    updateProgressbar();
  });
});

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.contains("form-step-active") &&
      formStep.classList.remove("form-step-active");
  });

  formSteps[formStepsNum].classList.add("form-step-active");
}

function updateProgressbar() {
  // idx is a utility function for traversing properties on objects and arrays.
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progress-step-active");
    } else {
      progressStep.classList.remove("progress-step-active");
    }
  });

  const progressActive = document.querySelectorAll(".progress-step-active");

  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}