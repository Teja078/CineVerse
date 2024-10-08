<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineVerse</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                        <h3>Cineverse: Your Ultimate Movie Guide</h3>
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
                <h2>Login</h2>
                <form id="loginform" action="loginphp.php" method="post">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username"><br><br>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password"><br><br>
                    <input type="submit" value="Login">
                    <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
                </form>
                <p>Don't have an account? <a href="cineversesignup.php">Sign Up</a></p>
            </div>
        </div>
    </div>

    
</body>
</html>