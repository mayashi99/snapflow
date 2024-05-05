document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission
    // Here you can add your login logic, like sending a request to the server
    // For simplicity, let's just log the username and password to the console
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    console.log("Username: " + username + ", Password: " + password);
});
