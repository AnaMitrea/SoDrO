// Get the modal
const groupModal = document.getElementById("group-modal");
const pageContainer = document.getElementById("id-page-container");
const dashboardContainer = document.getElementById("id-dashboard-structor");

const emailModal = document.getElementById("email-modal");
const pwdModal = document.getElementById("pwd-modal");

// Get the button that opens the modal
const groupBtn = document.getElementById("group-btn");
const emailBtn = document.getElementById("email-btn");
const pwdBtn = document.getElementById("pwd-btn");

// Get the <span> element that closes the modal
const span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
groupBtn.onclick = function() {
    groupModal.style.display = "block";
    // TODO eliminate sidebar
    pageContainer.style.overflowY = "hidden";
    dashboardContainer.style.position = "relative";
    dashboardContainer.style.overflowY = "hidden";
}

emailBtn.onclick = function() {
    emailModal.style.display = "block";
    // TODO eliminate sidebar
    pageContainer.style.overflowY = "hidden";
    dashboardContainer.style.position = "relative";
    dashboardContainer.style.overflowY = "hidden";
}

pwdBtn.onclick = function() {
    pwdModal.style.display = "block";
    // TODO eliminate sidebar
    pageContainer.style.overflowY = "hidden";
    dashboardContainer.style.position = "relative";
    dashboardContainer.style.overflowY = "hidden";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    groupModal.style.display = "none";
    emailModal.style.display = "none";
    pwdModal.style.display = "none";
}

// When the user clicks anywhere outside the modal, close it
window.onclick = function(event) {
    if (event.target === groupModal) {
        groupModal.style.display = "none";
    }
    else if (event.target === emailModal) {
        groupModal.style.display = "none";
    }
    else if (event.target === pwdModal) {
        groupModal.style.display = "none";
    }
}