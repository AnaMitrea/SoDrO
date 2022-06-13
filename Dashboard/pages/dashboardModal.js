const pageContainer = document.getElementById("id-page-container");
const dashboardContainer = document.getElementById("id-dashboard-structor");

// Get the modal
const groupModal = document.getElementById("group-modal");
const emailModal = document.getElementById("email-modal");
const pwdModal = document.getElementById("pwd-modal");

// Get the button that opens the modal
const groupBtn = document.getElementById("group-btn");
const emailBtn = document.getElementById("email-btn");
const pwdBtn = document.getElementById("pwd-btn");

// Get the <span> element that closes the modal
const span1 = document.getElementsByClassName("close")[0];
const span2 = document.getElementsByClassName("close")[1];
const span3 = document.getElementsByClassName("close")[2];

// When the user clicks the button, open the modal
groupBtn.onclick = function() {
    groupModal.style.display = "block";
    // TODO eliminate sidebar
    /*
    pageContainer.style.overflowY = "hidden";
    dashboardContainer.style.position = "relative";
    dashboardContainer.style.overflowY = "hidden";
     */
}

emailBtn.onclick = function() {
    emailModal.style.display = "block";
}

pwdBtn.onclick = function() {
    pwdModal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    groupModal.style.display = "none";
}
span2.onclick = function() {
    emailModal.style.display = "none";
}
span3.onclick = function() {
    pwdModal.style.display = "none";
}


// When the user clicks anywhere outside the modal, close it
window.onclick = function(event) {
    if (event.target === groupModal) {
        groupModal.style.display = "none";
    }
    if (event.target === emailModal) {
        emailModal.style.display = "none";
    }
    else if (event.target === pwdModal) {
        pwdModal.style.display = "none";
    }
}