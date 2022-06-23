function changePreferences() {
    const userContent = document.getElementById("user-content");
    const groupContent = document.getElementById("group-content");

    if (userContent.style.display === "none") {
        userContent.style.display = "block";
        groupContent.style.display = "none";
    } else {
        userContent.style.display = "none";
        groupContent.style.display = "block";
    }
}

/* Save the category */
let saveFile = () => {

    // Get the data from each element on the form.
    const category1 = document.getElementById('category-select1');
    const category2 = document.getElementById('category-select2');
    const category3 = document.getElementById('category-select3');

    // This variable stores all the data.
    let data =
        '\r ---Your Favorite Categories--- \r\n ' +
        'First Category: ' +category1.value + ' \r\n ' +
        'Second Category: ' + category2.value + ' \r\n ' +
        'Third Category: ' + category3.value + ' \r\n ';

    // Convert the text to BLOB.
    const textToBLOB = new Blob([data], { type: 'text/plain' });
    const sFileName = 'statistics.txt';	   // The file to save the data.

    let newLink = document.createElement("a");
    newLink.download = sFileName;

    if (window.webkitURL != null) {
        newLink.href = window.webkitURL.createObjectURL(textToBLOB);
    }
    else {
        newLink.href = window.URL.createObjectURL(textToBLOB);
        newLink.style.display = "none";
        document.body.appendChild(newLink);
    }
    newLink.click();
}