<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - CineVerse</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="container">
        <div class="left-side">
            <h1>CineVerse</h1>
            <p>Your online movie surfing partner :)</p>
            <button onclick="openModal()">About Us</button>
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <p>Cineverse is a movie database offering detailed film info, including descriptions, cast, and crew. Users can browse catalogs, check ratings, reviews, and share insights. It's a one-stop destination for discovering new releases and classic films.</p>
                </div>
            </div>

            <script>
                function openModal() {
                    document.getElementById('myModal').style.display = "block";
                }

                function closeModal() {
                    document.getElementById('myModal').style.display = "none";
                }
            </script>
        </div>
    <div class="right-side">
        <div class="login-container">
            <h2>Sign Up</h2>
            <form id="signupform" action="signupphp.php" method="post">
                <input type="text" id="username" name="username" placeholder="Username" required>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required> <!-- Added confirm password field -->
                <button type="submit">Sign Up</button>
            </form>
            <p>Already have an account? <a href="loginpage.php">Login</a></p>
        </div>
    </div>

    <script src="signup.js"></script>
</body>
</html>
