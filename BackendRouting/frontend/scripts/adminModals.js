const removeUserForm = document.getElementById("remove-user-form");
const addUserForm = document.getElementById("add-user-form");

const addButton = document.getElementById("addbutton");
const removeButton = document.getElementById("removebutton");



removeButton.onclick=function (){
    removeUserForm.style.display="block";
    addUserForm.style.display="none";
};
addButton.onclick=function (){
    removeUserForm.style.display="none";
    addUserForm.style.display="block";
};