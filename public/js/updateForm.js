const openFormButton = document.getElementById("openUpdateForm");
const popupForm = document.getElementById("updateForm");
const closeFormButton = document.getElementById("closeForm");

console.log(openFormButton);


openFormButton.addEventListener('click', () => {
    popupForm.showModal()
})

closeFormButton.addEventListener('click', () => {
    popupForm.close()
})



// openFormButton.addEventListener("click", function() {
//   popupForm.style.display = "block";

// });

// closeFormButton.addEventListener("click", function() {
//   popupForm.style.display = "none";
// });
