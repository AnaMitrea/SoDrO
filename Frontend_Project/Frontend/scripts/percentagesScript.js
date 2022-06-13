function changePreferences() {
    var userContent = document.getElementById("user-content");
    var groupContent = document.getElementById("group-content");

    if (userContent.style.display === "none") {
        userContent.style.display = "block";
        groupContent.style.display = "none";
    } else {
        userContent.style.display = "none";
        groupContent.style.display = "block";
    }
}