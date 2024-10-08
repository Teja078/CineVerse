$(document).ready(function() {
    $('#loginform').submit(function(event) {
        event.preventDefault(); 
        const username = $('#username').val();
        const password = $('#password').val();

        if (username === "" || password === "") {
            alert("Please enter both username and password.");
            return false; 
        }

        const correctUsername = "Balaji";
        const correctPassword = "balaji078";
        
        if (username === correctUsername && password === correctPassword) {
            window.location.href = "homepage.html"; 
        } else {
            alert("Incorrect username or password");
            return false;
        }
    });
});