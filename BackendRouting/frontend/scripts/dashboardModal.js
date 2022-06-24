// Get the modal
const groupModal = document.getElementById("group-modal");
const pageContainer = document.getElementById("id-page-container");
const dashboardContainer = document.getElementById("id-dashboard-structor");

// Get the button that opens the modal
const groupBtn = document.getElementById("group-btn");

// Get the <span> element that closes the modal
const span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
groupBtn.onclick = function() {
    groupModal.style.display = "block";
    pageContainer.style.overflowY = "hidden";
    dashboardContainer.style.position = "relative";
    dashboardContainer.style.overflowY = "hidden";
};

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    groupModal.style.display = "none";

};

// When the user clicks anywhere outside the modal, close it
window.onclick = function(event) {
    if (event.target === groupModal) {
        groupModal.style.display = "none";
    }
};