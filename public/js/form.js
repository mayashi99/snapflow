document.getElementById("signup-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission
    // Here you can add your signup logic, like sending a request to the server
    // For simplicity, let's just log the username, email, and password to the console
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    console.log("Username: " + username + ", Email: " + email + ", Password: " + password);
});