
document.addEventListener("DOMContentLoaded", function () {
// Find the form element by its ID
var loginForm = document.getElementById("login-form");

// Add a submit event listener to the form
loginForm.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent the default form submission

    // Perform any necessary validation here (e.g., checking username and password)

    // Redirect to the new page after successful login
    //window.location.href = "/home/cerlo/Documents/MySQL/TP2/html/home/index.html"; // Change "new-page.html" to the desired URL
    //window.location.assign("ioniao.html"); // Change "new-page.html" to the desired URL
    window.location.assign("../../html/home/home.html");
});
});
