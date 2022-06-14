const itemInput = document.querySelector(".item-input input"),
    filters = document.querySelectorAll(".filters span"),
    clearAll = document.querySelector(".clear-btn"),
    itemBox = document.querySelector(".item-box");

let editId;
let isEditItem = false;

/*
*  Parsing item list in order to convert text into js object.
*  Data is saved until page is closed.
*/
let products = JSON.parse(localStorage.getItem("products-list"));

/* activate button for Clear All */
filters.forEach(btn => {
    btn.addEventListener("click", () => {
        document.querySelector("span.active").classList.remove("active");
        btn.classList.add("active");
        showShoppingList(btn.id);
    });
});

/* Display Shopping List Items */
function showShoppingList(filter) {
    let listTag = "";
    if(products) {
        products.forEach((product, id) => {
            let completed = product.status === "completed" ? "checked" : "";
            if(filter === "all") {
                /* Displaying Item-box */
                listTag += `<li class="task">
                            <label for="${id}">
                                <input type="checkbox" onclick="updateStatus(this)" id="${id}" ${completed} >
                                <p class="${completed}" >${product.name}</p>
                            </label>
                            
                            <div class="configs">
                                <i onclick="showMenu(this)" class="uil uil-ellipsis-h"></i>
                                <ul class="item-menu">
                                    <li onclick='editItem(${id}, "${product.name}")' ><i class="uil uil-pen" style="color:#5a9f7d"></i>Edit</li>
                                    <li onclick='deleteItem(${id}, "${filter}")' ><i class="uil uil-trash" style="color:#5a9f7d"></i>Delete</li>
                                </ul>
                            </div>
                            </li>`;
            }
        });
    }

    /* Display the entire list of items or "Notification text" */
    itemBox.innerHTML = listTag || `<span style="color: lightgrey">You don't have any items yet.</span>`;

    let checkItem = itemBox.querySelectorAll(".task");
    !checkItem.length ? clearAll.classList.remove("active") : clearAll.classList.add("active");
    itemBox.offsetHeight >= 300 ? itemBox.classList.add("overflow") : itemBox.classList.remove("overflow");
}
showShoppingList("all");

/* Edit or Delete Menu buttons */
function showMenu(selectedTask) {
    let menuDiv = selectedTask.parentElement.lastElementChild;
    menuDiv.classList.add("show");
    document.addEventListener("click", e => {
        if(e.target.tagName !== "I" || e.target !== selectedTask) {
            menuDiv.classList.remove("show");
        }
    });
}

/* Pending or Completed Status */
function updateStatus(selectedTask) {
    let taskName = selectedTask.parentElement.lastElementChild;
    if(selectedTask.checked) {
        taskName.classList.add("checked");
        products[selectedTask.id].status = "completed";
    } else {
        taskName.classList.remove("checked");
        products[selectedTask.id].status = "pending";
    }
    localStorage.setItem("products-list", JSON.stringify(products))
}

/* Edits name of product */
function editItem(taskId, textName) {
    editId = taskId;
    isEditItem = true;
    itemInput.value = textName;
    itemInput.focus();
    itemInput.classList.add("active");
}

/* Deletes Item from Shopping List */
function deleteItem(deleteId, filter) {
    isEditItem = false;
    products.splice(deleteId, 1);
    localStorage.setItem("products-list", JSON.stringify(products));
    showShoppingList(filter);
}

/* Deletes all items when clearAll btn is clicked */
clearAll.addEventListener("click", () => {
    isEditItem = false;
    products.splice(0, products.length);
    localStorage.setItem("products-list", JSON.stringify(products));
    showShoppingList()
});

/*
* Prevents User to add a null value into shopping List
*/
itemInput.addEventListener("keyup", e => {
    let userItem = itemInput.value.trim();
    if(e.key === "Enter" && userItem) {
        if(!isEditItem) {
            products = !products ? [] : products;
            let itemInfo = {name: userItem, status: "pending"};
            products.push(itemInfo);
        } else {
            isEditItem = false;
            products[editId].name = userItem;
        }

        itemInput.value = "";
        localStorage.setItem("products-list", JSON.stringify(products));
        showShoppingList(document.querySelector("span.active").id);
    }
});