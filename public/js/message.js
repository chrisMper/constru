// Get the search input field, search button, and users list
const searchBar = document.querySelector(".search input"),
  searchIcon = document.querySelector(".search button"),
  usersList = document.querySelector(".users-list");

// When the search icon is clicked, toggle the visibility of the search input field,
// add/remove the "active" class from the search icon, and focus on the search input field
searchIcon.onclick = () => {
  searchBar.classList.toggle("show");
  searchIcon.classList.toggle("active");
  searchBar.focus();
  if (searchBar.classList.contains("active")) {
    // If the search input field is already active, clear its value and remove the "active" class
    searchBar.value = "";
    searchBar.classList.remove("active");
  }
};

// When a key is released in the search input field, perform a search and display the results
searchBar.onkeyup = () => {
  let searchTerm = searchBar.value;
  if (searchTerm != "") {
    searchBar.classList.add("active");
  } else {
    searchBar.classList.remove("active");
  }
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "<?php echo URLROOT; ?>/Messages/search", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        console.log(data);
        //usersList.innerHTML = data; 

      }
    }
  };
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("searchTerm=" + searchTerm);
};

// Every 500 milliseconds, perform a GET request to retrieve a list of users
// and display the results if the search input field is not currently active
setInterval(() => {
    // create a new XMLHttpRequest object
    let xhr = new XMLHttpRequest();
    
    // open a GET request to the specified URL
    xhr.open("GET", "<?php echo URLROOT; ?>/Messages/messages2", true);
  
    // define a callback function to execute when the request is complete
    xhr.onload = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          // extract the response data from the XHR object
          let data = xhr.response;
          console.log(data)
  
          // update the usersList element with the new data, if the search bar is not active
          // if (!searchBar.classList.contains("active")) {
          //   usersList.innerHTML = data;
          // }
        }
      }
    };
    // send the request
    xhr.send();
  }, 2000);